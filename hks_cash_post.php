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
 <script>
$(document).ready(function(){
  $("cash_receive_barcode_iframe.php  #barcode_btn").click(function(){
   // alert("Value: " + $("#test").val());


   alert("");
  });
});
</script>
<body>
<?php
$servername = "localhost";
$username = "HKSamacar_local";
$password = "Jpsk/1866";
$dbname = "HareKrishnaSamacar";

// Create connection
date_default_timezone_set("Asia/Dhaka");
$tran_date=strval(date("Y-m-d"));
?> 
 <?php
 
include_once "function.php";
// Create connection
$conn_id = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_id->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn_id,"utf8");
$sql_id = "SELECT count(Rdate)as ret FROM tblIssue where Rdate='".$tran_date."' and Returned='TRUE' ";
$result_id = $conn_id->query($sql_id);

if ($result_id->num_rows > 0) {
    // output data of each row
    $row = $result_id->fetch_assoc();
          $GLOBALS['ret']= $row["ret"];
    
} else {
    echo "0 results";
}
$conn_id->close();














$conn_id_am = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_id_am->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn_id_am,"utf8");
$sql_id = "SELECT SUM(Dr)as dr,count(Dr)as cn FROM tblIssue where Rdate='".$tran_date."' and Returned <>'TRUE'  ";
$result_id = $conn_id_am->query($sql_id);

if ($result_id->num_rows > 0) {
    // output data of each row
    $row = $result_id->fetch_assoc();
          $GLOBALS['dr']= $row["dr"];
          $GLOBALS['cn']= $row["cn"];

} else {
    echo "0 results";
}
$conn_id_am->close();
?>
<div class="container-fluid">

<div class="row" style= "height: 100%;" >

<div id="wrapper" class="col-md-2 col-xl-2">

  <!-- Sidebar -->
  
	<br> <br>
    <div class="col-sm-12 col-lg-12" style="text-align: center;">
        <p><img src="front_images/hklogo.gif" height="100" width="100" alt="HKS"></p>
        <h5 style="font-family: 'Leckerli One', cursive; color: white;" > Hare Krishna Samacar</h5>
    </div>
  
  
  
    <div id="accordion">
  
    <div class="card">
      <div class="card-header">
        <a class="card-link" href="hks_dashboard.php"> Dashboard</a>
      </div>
    </div>
	
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo"> Agents  </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_agent_new.php" > New Agent </a> <br>
			<a href="hks_agent_book.php" > Agent Book </a> 
        </div>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse3"> Subscribers  </a>
      </div>
      <div id="collapse3" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_subs_new.php"> New Subscriber </a> <br>
			<a href="hks_subs_book.php"> Subscriber Book </a> 
		</div>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" href="hks_products.php"> Products  </a>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse5"> Cash Memo  </a>
      </div>
      <div id="collapse5" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_cash_retail.php" > Retail Sale </a> <br>
			<a href="hks_cash_post.php" > Courier & Post Office </a>			  
        </div>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link"  href="hks_send_newspaper.php"> Send Newspaper  </a>
      </div>
    </div>
	
	<div class="card">
      <div class="card-header">
        <a class="collapsed card-link" href="hks_acc_summ.php"> Accounts  </a>
      </div>
    </div>
	
	
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" href="#collapse9"> Settings    </a>
      </div>
    </div> 
  
  </div> <!-- End of Accordion -->
  
		<div style="text-align:center; position: fixed; bottom: 0;">
           <p style= "cursor: pointer;text-align:center; color: yellow;" > Powered by <br> <a href="https://www.facebook.com/harekrishnasamacar/" target="_blank" style="color: white;" >@HareKrishnaSamacarIT</a> <br><?php echo date("d-m-Y") ?> </p>
           <br>  <?php include_once "hks_user.php" ;   ?>

       
        </div>
</div>
  
<div class="col-md-10 col-xl-10">


      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
              <div class="col-md-12">
              <p class="well lead" style="margin-top: 10px;" > Post/Courier ID & Cash receipt Entry </p>
            <div class="col-sm-12 col-md-12  contact-form">
                <div class="row"> <!-- div da esquerda -->
                    <!-- Text input CNPJ e Razao Social-->
                    <div class="col-sm-12 contact-form"> <!-- div da direita -->
                        <form id="contact"  target="cash_receive_iframe" action="hks_cash_receive_iframe_data.php"  method="post" class="form" role="form">
                            
							    <div class="row" style="background-color: cornsilk; padding: 10px 0px 0px 0px">
                                <div class="col-xs-4 col-md-4 form-group" >
																<input class="form-control" type="text" name="cash_issue" placeholder="Type Issue No." required >

                                </div>
								
                                <div class="col-xs-4 col-md-4 form-group">
								
                                </div>
								
                                <div class="col-xs-4 col-md-4 form-group" style="text-aling: right; padding: 0px 0px 0px 0px">
								                	<button class="btn btn-primary " type="submit" name="type" value="Due" >Due</button> 
								                	<button class="btn btn-success" type="submit" name="type" value="Paid" >Paid</button>
									                <button class="btn btn-warning" type="submit" name="type" value="Return" >Return</button>
								                	<button class="btn btn-danger" type="submit" name="type" value="All">All</button>
                                  <button class="btn btn-danger" type="submit" name="type" value="Summary">Summary</button>

                                  <button class="btn btn-danger" type="submit" name="type" value="Edit">Edit</button>

                                </div>
								
						
							<hr style="background-color: transparent; border: 1px solid red; margin: 0em 0em 0em 0em; " noshade>
						</form>

                <iframe name="cash_receive_iframe" height="330" width=100%  style="background-color: cornsilk; border:0;" style="overflow-y:scroll; overflow-x:scroll;"></iframe>
 
                    </div>
                    </div> <!-- fim div da direita -->
                </div> <!-- fim div da esquerda -->
            </div>

           
            <div>
         <h3 style="background-color:  ">  

           Today Received:
            <span style="color:green ">  <?php
echo $GLOBALS['cn'];

            ?> </span>  ( <span style="color:blue "><?php
            echo $GLOBALS['dr'];
            
                        ?> </span>),
              

            Returned: <span style="color:red "> <?php
echo $GLOBALS['ret'];

            ?>
            </span> 
            </h3> 
            </div>
			<hr> 
			<div class="row">
				<div class="col-xs-6 col-md-6">
				<form id="contact"  target="cash_receive_barcode_iframe" action="cash_receive_barcode_iframe.php"  method="post" class="form" role="form">
          <input class="form-control" id="inputrazaosocial" name="ag_barcode" placeholder="Scan Barcode to Search" type="text" required autofocus />
        </form>
        </div>

        <div class="col-xs-6 col-md-6">
				<form id="contact"  target="return_entry_iframe" action="return_entry_iframe.php"  method="post" class="form" role="form"> 
					<input class="form-control" id="inputrazaosocial" name="ag_return" placeholder="Return Entry" type="text" autofocus required />
          </form>
        </div>
			</div>
      		<hr>
			<div class="table-responsive">
			  <iframe name="cash_receive_barcode_iframe" height="130" width=100%  style="border:0" style="overflow-y:scroll; overflow-x:scroll;"></iframe>
			  <iframe name="return_entry_iframe" height="95" width=100%  style="border:0" style="overflow-y:scroll; overflow-x:scroll;"></iframe>
			</div>
          </div>
        </div>
      </div>
    </div>
      

                  

</div>




</div> <!-- end of row -->

</div> <!-- end of container -->

</body>
</html>