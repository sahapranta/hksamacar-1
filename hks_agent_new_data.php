<?php

include_once "session_check.php";
session_start();
  $user=$_SESSION["id"];
echo $ag_number=$_POST["ag_number"];
echo $trans_id=$_POST["trans_id"];
echo $maxidx_tblmain=$_POST["maxidx_tblmain"];

echo $ag_name=$_POST["ag_name"];
echo $ag_addr=$_POST["ag_addr"];
echo $ag_dist=$_POST["ag_dist"];
echo $ag_ps=$_POST["ag_ps"];
echo $ag_po=$_POST["ag_po"];
echo $ag_po_bn=$_POST["ag_poffice_bn"];
echo $ag_mobile1=$_POST["ag_mobile1"];
echo $ag_mobile2=$_POST["ag_mobile2"];

echo $courier_name=$_POST["courier_name"];
echo $courier_description=$_POST["courier_description"];

echo $ag_email=$_POST["ag_email"];
echo $ag_date=$_POST["ag_date"];
echo $quantity=$_POST["ag_copies"];



echo $news_rate=$_POST["news_rate"];



echo $ag_cat=$_POST["ag_cat"];
echo $paymode=$_POST["ag_type"];

echo $message=$_POST["message"];

echo $ag_cont="Bangladesh";


 date_default_timezone_set("Asia/Dhaka");
 $cdate= date("Y-m-d h:i:sa");
 $rdate= date("Y-m-d");




 $price =$sb_taka;
  $period="";
 $payTypID="";
 $Resrcpy=$sb_issue;
 $Dis="";
  $AgCatId="";
 $Discontinued="FALSE";
$status="CONT";
 $NonConditioned="FALSE";
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
    $stmt = $conn->prepare("INSERT INTO tblMem (ID,ID_EN,Name,vill,po,po_bn,ps,dist,cont,phone,mob,email,comment,paymode,ag_quantity,ag_date,courier_name,courier_description,news_rate,user,status)
    VALUES (:ID,:ID_EN,:Name,:vill,:po,:po_bn,:ps,:dist,:cont,:phone,:mob,:email,:comment,:paymode,:ag_quantity,:ag_date,:courier_name,:courier_description,:news_rate,:user,:status)");

    $stmt->bindParam(':ID', $ag_number);

    $stmt->bindParam(':ID_EN', $ag_number);
    $stmt->bindParam(':Name', $ag_name);
    $stmt->bindParam(':vill', $ag_addr);
    $stmt->bindParam(':po', $ag_po);
    $stmt->bindParam(':po_bn', $ag_po_bn);

    $stmt->bindParam(':ps', $ag_ps);
    $stmt->bindParam(':dist', $ag_dist);
    $stmt->bindParam(':cont', $ag_cont);
    $stmt->bindParam(':phone', $ag_mobile1);
    $stmt->bindParam(':mob', $ag_mobile2);
    $stmt->bindParam(':email', $ag_email);
    $stmt->bindParam(':ag_date', $ag_date);
    $stmt->bindParam(':comment', $message);

    $stmt->bindParam(':paymode', $paymode);
    
    $stmt->bindParam(':ag_quantity', $quantity);

    $stmt->bindParam(':courier_name', $courier_name);
    $stmt->bindParam(':courier_description', $courier_description);
    

    $stmt->bindParam(':news_rate', $news_rate);
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':status', $status);


    $stmt->execute();   echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
 try {
    $conn_trans = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
     $conn_trans->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $conn_trans->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
    $conn_trans->query('SET NAMES "utf8"'); 
    // prepare sql and bind parameters
    $stmt_trans = $conn_trans->prepare("INSERT INTO tblMain (idx,transid,id,cdate,rdate,price,period,payTypID,paymode,Resrcpy,Dis,AgCatId,Discontinued,NonConditioned,quantity,user)
    VALUES (:idx,:transid,:id,:cdate,:rdate,:price,:period,:payTypID,:paymode,:Resrcpy,:Dis,:AgCatId,:Discontinued,:NonConditioned,:quantity,:user)");

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

    
    $stmt_trans->bindParam(':user', $user);


 
    // insert a row
 
    $stmt_trans->execute();

 
 

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn_trans = null;
 

?>