 



  <?php
include_once "session_check.php";
session_start();
  $user=$_SESSION["id"];
    
  $VPNo=$_POST["vp_no"];
 
  $Dr=$_POST["vp_receive"];

 
   $VPDate=$_POST["vp_date"];
 
  $transaction_id=intval($_POST["transaction_id"]);
 
  $idn=$_POST["idn"];
 
  $vp_comment=$_POST["vp_comment"];
 
  $vp_return=$_POST["vp_return"];

 
  
  $servername = "localhost";
  $username = "HKSamacar_local";
  $password = "Jpsk/1866";
  $dbname = "HareKrishnaSamacar";
  
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      $conn->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
      $conn->query('SET NAMES "utf8"'); 
      // prepare sql and bind parameters
     /*
     $stmt = $conn->prepare("INSERT INTO tblMem (ID,ID_EN,Name,vill,po,ps,dist,cont,phone,mob,email,comment,paymode,ag_quantity)
      VALUES (:ID,:ID_EN,:Name,:vill,:po,:ps,:dist,:cont,:phone,:mob,:email,:comment,:paymode,:ag_quantity)");
  */
  
  $stmt = $conn->prepare("update tblIssue set VPNo=:VPNo,Dr=:Dr,RDate=:RDate,Comment=:Comment,Returned=:Returned,user=:user where transaction_id=:transaction_id");
  
  
  
  
      
  
      $stmt->bindParam(':VPNo', $VPNo);
      $stmt->bindParam(':Dr', $Dr);
      
      $stmt->bindParam(':Returned', $vp_return);
      $stmt->bindParam(':Comment', $vp_comment);



      $stmt->bindParam(':RDate', $VPDate);
       
      $stmt->bindParam(':transaction_id', $transaction_id);
      $stmt->bindParam(':user', $user);

   
      $stmt->execute();   
      
      
      echo "<h2 style='background-color:red'> !!!  TX:".$transaction_id.",VP No:".$VPNo.", Dated: ".$VPDate."  has been Returned !</h2>";
      }
  catch(PDOException $e)
      {
      echo "Error: " . $e->getMessage();
      }
  $conn = null;
    
  $conn_trans = null;
   
  
  ?>  