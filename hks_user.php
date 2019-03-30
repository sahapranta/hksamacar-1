<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<title>Post Office & Courier</title>


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
 
 

<style type="text/css">


body, html, .container-fluid {
     height: 100%;
}
 
 
/* ---Start of Wrapper style ---- */

#wrapper	{
		background-color: #787878;
	}

.card-header	{
	background-color: #3c3c3c;
	max-height: 40px;
	padding: 5px;
	}

.card-link {	
	color: white;
	}
	
.card-link:Hover {	
	color: yellow;
	}
	
.card-body {
	padding: 5px;
	background-color: #f0f0f0;
	
	}
	
.card-body a {	
	color: black;
	}




/* ---end of Wrapper style ---- */



</style>

</head>

<body>


<?php
session_start();
include_once "function.php";
include_once "session_check.php";

 $u_name=user_id_name($_SESSION["id"]);


 
  $user_key=get_user_key($_SESSION["id"]);
 



echo "<br>";
echo '
<div class="row" style ="border: none;color:white;">';

echo  $u_name;
echo '
</div>
<div class="row" style ="border: none;color:white;">
<div class="col-xs-6 form-group">
<form action="hks_admin_user.php">
 <button  style ="border: none;color:white;text-align:center;
 background-color: transparent;
 outline: none;cursor:pointer; "
 type="submit"><i class="fas fa-user-circle"></i></button>
</form></div> ';
echo '
<div class="col-xs-6 form-group"><form action="hks_admin_login.php">
 <button  style ="border: none;color:white;text-align:center;
 background-color: transparent;
 outline: none;cursor:pointer;    
 " type="submit"><i class="fas fa-power-off"></i></button>
</form> </div></div>';
?>

</body>
</html>