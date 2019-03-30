<?php
session_start();

    $print_issue=$_SESSION["print_issue"];


 
 
?>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<title>Courier Pack Label</title>


  <meta charset="utf-8">
 
 <link rel="shortcut icon" href="favicon1.ico" />
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 
 <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jsbarcode/3.5.8/JsBarcode.all.min.js"></script>
  
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
   
 
</head>

<style>

    .page {
                    page-break-after: always;

       /* width: 8.27in;
       min-height: 11.69in;
        padding: 10px 10px 20px 10px;
        margin: 1cm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);

        */
    }
	
	
table {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 2px;
    text-align: left;
}

 @media print {
        .page {

            /*
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;

            */
            page-break-after: always;
        }
    }


</style>

<body >




<?php 

include "function.php";
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
  $sql_all = "SELECT transid,vername,agcpy,SentDate,transaction_id,VPNo FROM tblIssue  where (vername=".$print_issue.") AND (transid<100)";
$result_all = $conn_all->query($sql_all);

if ($result_all->num_rows > 0) {
    // output data of each row
    $i=0;
    echo '
    
    <div class="page">
<table style="width:100%" >
<col style="width:50%">
<col style="width:50%">


';

    while($row = $result_all->fetch_assoc()){
           
     



 


 
        
  $i=$i+1;

if($i%2!=0){

echo'
<tr >
<td style="width: 50%;
overflow: hidden;
display: inline-block;
white-space: nowrap; " >
<table style="width:100%" >
<tr><td colspan="3">
    <div style="font-size:15px; text-align: center; font-weight: bold;"> 
    <span style="font-size:20px;" > '.id_name($row["transid"]).'('.$row["transid"].') </span> <br> '.id_phone($row["transid"]).'    '.id_mobile($row["transid"]).'</span> <br>
    
    '.id_vill($row["transid"]).' ,
 থানাঃ'.ps_en_bn(id_ps($row["transid"])).', 
 জেলা:'.dist_en_bn(id_dist($row["transid"])).'
    
    
    
    
    
    
    
    
    </div>
	</td>
	
	</tr>
	
<tr><td>
<svg style=" height:50%; " id="s'.$row["transaction_id"].'" >    
</svg></td>


<td>
	<div style="font-size:20px; text-align: center; font-weight: bold;"> Pcs: '.$row["agcpy"].'<br>	TK. '.intval(doubleval($row["agcpy"])*doubleval(id_news_rate($row["transid"]))).'</div>
	</td>
	<td>
	<div style="font-size:20px; text-align: center; font-weight: bold;"> '.id_courier_name($row["transid"]).' <br>'.id_courier_description($row["transid"]).' </div>
	</td>
	</tr>
<tr>
<td colspan="3">
   <img src="hks_receipt_footer.svg" height="100" style="display: block; margin-left: auto; margin-right: auto;"></td>
   </tr>
</table>
</td>

';



echo '<script> JsBarcode("#s'.$row["transaction_id"].'", "'.$row["transaction_id"].'");</script>';

}



if($i%2==0){

    echo '

<td style="width: 50%;
overflow: hidden;
display: inline-block;
white-space: nowrap;" >
<table style="width:100%" >
<tr><td colspan="3">
    <div style="font-size:15px; text-align: center; font-weight: bold;">
    <span style="font-size:20px;" > '.id_name($row["transid"]).'('.$row["transid"].') </span><br> '.id_phone($row["transid"]).'    '.id_mobile($row["transid"]).'</span> <br>
    
    
    
    '.id_vill($row["transid"]).' ,
    থানাঃ'.ps_en_bn(id_ps($row["transid"])).', 
    জেলা:'.dist_en_bn(id_dist($row["transid"])).'
      
    
    
    
    </div>
	</td>
	
	</tr>
	
<tr><td >
<svg style=" height:50%;" id="s'.$row["transaction_id"].'" >
    
</svg></td>

<td>
	<div style="font-size:20px; text-align: center; font-weight: bold;"> Pcs: '.$row["agcpy"].'<br>	TK.  '.intval(doubleval($row["agcpy"])*doubleval(id_news_rate($row["transid"]))).'</div>
	</td>
<td>
	<div style="font-size:20px; text-align: center; font-weight: bold;"> '.id_courier_name($row["transid"]).'<br>'.id_courier_description($row["transid"]).' </div>
	</td>
	</tr>
<tr>
<td colspan="3">
   <img src="hks_receipt_footer.svg" height="100" style="display: block;
    margin-left: auto; margin-right: auto;"></td>
   </tr>
</table>
</td>

</tr>

';
echo '<script> JsBarcode("#s'.$row["transaction_id"].'", "'.$row["transaction_id"].'");</script>';

}



if($i%10==0){

echo '</table>

</div>

<div class="page">
<table style="width:100%">

'; 

}





}  //end while loop

 





echo '</table>

</div>

<div class="page">
<table style="width:100%">
<col style="width:50%">
<col style="width:50%">

'; 
} else {
   echo "0 results";
}
$conn_all->close();
   


?>

 <!-- end of container -->

</body>
</html>