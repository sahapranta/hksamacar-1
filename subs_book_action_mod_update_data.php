<?php
include_once "session_check.php";
session_start();
  $user=$_SESSION["id"];
  
echo $id=$_POST["id"];
echo $quantity=$_POST["quantity"];
echo $status=$_POST["status"];
echo $skip=$_POST["skip"];

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

$stmt = $conn->prepare("update tblMem set status=:status,ag_quantity=:ag_quantity,skip=:skip,user=:user where ID_EN=:ID_EN");




    

    $stmt->bindParam(':ID_EN', $id);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':ag_quantity', $quantity);
     
    $stmt->bindParam(':skip', $skip);
    $stmt->bindParam(':user', $user);

    $stmt->execute();   echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
  
$conn_trans = null;
 

?>  