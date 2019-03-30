<?php include_once "session_check.php";  ?>

<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<title>Hare Krishna Samacar</title>


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
        <a class="collapsed card-link" data-toggle="collapse" href="#collapse57">  Products </a>
      </div>
      <div id="collapse57" class="collapse" data-parent="#accordion">
        <div class="card-body">
			<a href="hks_products.php" > Products </a> <br>
			<a href="cob_month.php" > Monthly COB</a>			  
        </div>
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
           <p style= "cursor: pointer;text-align:center; color: yellow;" > Powered by <br> <a href="https://www.facebook.com/hksamacar/" target="_blank" style="color: white;" >@HareKrishnaSamacarIT</a> <br> <?php echo date("d-m-Y") ?> </p>  <br> 
           
           
           <?php include_once "hks_user.php" ;   ?>

           
           
          
       
       
        </div>


</div>
  
<div class="col-md-10 col-xl-10">


    <!-- Page content -->
    <div id="page-content-wrapper">
	
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
		
        </div>
		
    </div>
      



</div>




</div> <!-- end of row -->

</div> <!-- end of container -->

</body>
</html>