 




 

<?php

include_once "session_check.php";
session_start();
  $user=$_SESSION["id"]; 
echo   $send_single_date=$_POST["send_single_date"];
echo "<hr>";
echo $send_single_id=(int)$_POST["send_single_id"];
echo "<hr>";
echo $send_single_issue=$_POST["send_single_issue"];
echo "<hr>";
date_default_timezone_set("America/New_York");


$year=date("Y");
 $date= date("m/d/Y") ;
 date_default_timezone_set("Asia/Dhaka");
  
 

 
 
 $servername = "localhost";
 $username = "HKSamacar_local";
 $password = "Jpsk/1866";
 $dbname = "HareKrishnaSamacar";
 
 // Create connection
 
 // Create connection
$conn_all = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_all->connect_error) {
 die("Connection failed: " . $conn_all->connect_error);
}
mysqli_set_charset($conn_all,"utf8");
$sql_all = "SELECT date,issue,quantity,status from products where issue='".$send_single_issue."'";
$result_all = $conn_all->query($sql_all);

if ($result_all->num_rows > 0) {
 // output data of each row
 $row = $result_all->fetch_assoc();
 
 
$status=$row["status"];
if($status!="right"){

    header("Location: hks_admin_login.php"); /* Redirect browser */
    exit();


}
 
 
} else {
 echo "0 results";
}
$conn_all->close();

  
 
 // Create connection
 $conn_id = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_id->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 mysqli_set_charset($conn_id,"utf8");
 $sql_id = "SELECT ag_quantity,status,balance FROM tblMem where ID_EN =$send_single_id";
 $result_id = $conn_id->query($sql_id);
 
 if ($result_id->num_rows > 0) {
     // output data of each row
     $row = $result_id->fetch_assoc();
            $GLOBALS['ag_quantity']= $row["ag_quantity"];
          $GLOBALS['balance']= $row["balance"];
         $GLOBALS['status']= $row["status"];
 

 } else {
     echo "0 results";
 }
 $conn_id->close();
 




if(($send_single_id<100)&&($send_single_id>0)  &&($GLOBALS['ag_quantity']>0)&&($GLOBALS['status']=='CONT')){

echo "courier";
$GLOBALS['type_id']='1';

}



if(($send_single_id<10000)&&($send_single_id>99)  &&($GLOBALS['ag_quantity']>0)&&($GLOBALS['status']=='CONT')){

    echo "agent";
    $GLOBALS['type_id']='2';
    
    }
if(($send_single_id>9999) &&($GLOBALS['balance']>0)&&($GLOBALS['status']=='CONT')){


    
    echo "sub";
    $GLOBALS['type_id']='3';
}

// Create connection
$conn_idc = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_idc->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn_idc,"utf8");
$m_id=$year.$send_single_issue.$GLOBALS['type_id'];

$sql_id = "SELECT MAX(transaction_id)as maxid FROM tblIssue where transaction_id LIKE '$m_id%'";
$result_id = $conn_idc->query($sql_id);

if ($result_id->num_rows > 0) {
    // output data of each row
  echo   $row = $result_id->fetch_assoc();

 
    if(($row["maxid"]==null) || ($row["maxid"]=="")){
     echo  $GLOBALS['m_id']=$m_id."0001";


    }
    else{
        echo   $GLOBALS['m_id']= (int)$row["maxid"]+1;

    }

    
} else {
    echo "0 results";
}
$conn_idc->close(); 





if($GLOBALS['type_id']=="1"){
    echo "typeone";


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $conn->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
                $conn->query('SET NAMES "utf8"'); 
        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO tblIssue(transaction_id,transid,vername,SentDate,sent,agcpy,user)
        VALUES (:transaction_id,:transid,:vername,:SentDate,:sent,:agcpy,:user)");
        $stmt->bindParam(':transaction_id', $transaction_id);
        $stmt->bindParam(':transid', $transid);
        $stmt->bindParam(':vername', $vername);
        $stmt->bindParam(':SentDate', $SentDate);
        $stmt->bindParam(':sent', $sent);
        $stmt->bindParam(':agcpy', $agcpy);
        $stmt->bindParam(':user', $user);
 
    
        $transaction_id = (int)$GLOBALS['m_id'];
        $transid = (int)$send_single_id;
        $vername = (int)$send_single_issue;
        $SentDate =  $send_single_date;

         $sent = "TRUE";
        $agcpy =(int)$GLOBALS['ag_quantity'];
        
    
        // insert a row
      
        
        $stmt->execute();
    
        // insert another row
        
    
        echo " <br> New records created successfully";
        }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
    $conn = null;
    
    }

    if($GLOBALS['type_id']=="2"){
        echo "typetwo";
    
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $conn->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
            $conn->query('SET NAMES "utf8"'); 
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO tblIssue(transaction_id,transid,vername,SentDate,sent,agcpy,user)
    VALUES (:transaction_id,:transid,:vername,:SentDate,:sent,:agcpy,:user)");
    $stmt->bindParam(':transaction_id', $transaction_id);
    $stmt->bindParam(':transid', $transid);
    $stmt->bindParam(':vername', $vername);
    $stmt->bindParam(':SentDate', $SentDate);
    $stmt->bindParam(':sent', $sent);
    $stmt->bindParam(':agcpy', $agcpy);
    $stmt->bindParam(':user', $user);


    $transaction_id = (int)$GLOBALS['m_id'];
    $transid = (int)$send_single_id;
    $vername = (int)$send_single_issue;
    $SentDate =  $send_single_date;
    $sent = "TRUE";
    $agcpy =(int)$GLOBALS['ag_quantity'];
    

    // insert a row
  
    
    $stmt->execute();

    // insert another row
    

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
        
        }
    

if($GLOBALS['type_id']=="3"){
    echo "typethree";
echo $GLOBALS['m_id'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $conn->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
            $conn->query('SET NAMES "utf8"'); 
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO tblIssue(transaction_id,transid,vername,SentDate,sent,agcpy,user)
    VALUES (:transaction_id,:transid,:vername,:SentDate,:sent,:agcpy,:user)");
    $stmt->bindParam(':transaction_id', $transaction_id);
    $stmt->bindParam(':transid', $transid);
    $stmt->bindParam(':vername', $vername);
    $stmt->bindParam(':SentDate', $SentDate);
    $stmt->bindParam(':sent', $sent);
    $stmt->bindParam(':agcpy', $agcpy);

    $stmt->bindParam(':user', $user);

    $transaction_id = (int)$GLOBALS['m_id'];
    $transid = (int)$send_single_id;
    $vername = (int)$send_single_issue;
    $SentDate =  $send_single_date;
    $sent = "TRUE";
    $agcpy = 1;
    

    // insert a row
  
    
    $stmt->execute();

    // insert another row
    

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;




















    
    
// {subscriber balance value update




    try {
        $conn_bal = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
         $conn_bal->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $conn_bal->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
        $conn_bal->query('SET NAMES "utf8"'); 
        // prepare sql and bind parameters
       /*
       $stmt = $conn->prepare("INSERT INTO tblMem (ID,ID_EN,Name,vill,po,ps,dist,cont,phone,mob,email,comment,paymode,ag_quantity)
        VALUES (:ID,:ID_EN,:Name,:vill,:po,:ps,:dist,:cont,:phone,:mob,:email,:comment,:paymode,:ag_quantity)");
    */
    
    $stmt = $conn_bal->prepare("update tblMem set balance=balance-1 where ID_EN=:ID_EN");
    
    
    
    
        
    
        $stmt->bindParam(':ID_EN',intval($send_single_id));
           
     
       // $stmt->bindParam(':user', $user);
    
    
     
    
     
        $stmt->execute();  
        
        // echo " <br> UPDATED ";
        }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
    $conn_bal = null;






//  subscriber balance value update}














    
    }



















 
 
 

 



 

 


/*
 try {
    $conn_trans = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
     $conn_trans->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $conn_trans->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
    $conn_trans->query('SET NAMES "utf8"'); 
    // prepare sql and bind parameters
    $stmt_trans = $conn_trans->prepare("INSERT INTO tblMain (idx,transid,id,cdate,rdate,price,period,payTypID,paymode,Resrcpy,Dis,AgCatId,Discontinued,NonConditioned,quantity)
    VALUES (:idx,:transid,:id,:cdate,:rdate,:price,:period,:payTypID,:paymode,:Resrcpy,:Dis,:AgCatId,:Discontinued,:NonConditioned,:quantity)");

    $stmt_trans->bindParam(':idx', intval($maxidx_tblmain));

    $stmt_trans->bindParam(':transid', $trans_id);
    $stmt_trans->bindParam(':id', $ag_number);
    $stmt_trans->bindParam(':cdate', $cdate);
    $stmt_trans->bindParam(':rdate', $rdate);
    $stmt_trans->bindParam(':price', $price);
    $stmt_trans->bindParam(':period', $period);
    $stmt_trans->bindParam(':payTypID', $payTypID);
    $stmt_trans->bindParam(':paymode', $paymode);
    $stmt_trans->bindParam(':Resrcpy', $Resrcpy);
    $stmt_trans->bindParam(':Dis', $Dis);
    $stmt_trans->bindParam(':AgCatId', $AgCatId);
    $stmt_trans->bindParam(':Discontinued', $Discontinued);
    $stmt_trans->bindParam(':NonConditioned', $NonConditioned);
    $stmt_trans->bindParam(':quantity', $quantity);

    


 
    // insert a row
 
    $stmt_trans->execute();

 
 

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn_trans = null;
 */

?>
