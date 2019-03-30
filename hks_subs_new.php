<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<title>New Subscriber</title>


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









<div class="container">
 
  <!-- Button to Open the Modal 

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>


-->
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Hare Krishna,Congratulation!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         Name:
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>






















  <!-- The Modal agent  -->
  <div class="modal" id="myModal_agent">
    <div class="modal-dialog">
      <div class="modal-content">
      
      
        
        <!-- Modal body -->

        <div class="modal-body">
        <iframe name='iframe_subs_individual_mod' height="700" width="100%" scrolling="yes" style="border:0"></iframe> 

         
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>






 
<?php
$servername = "localhost";
$username = "HKSamacar_local";
$password = "Jpsk/1866";
$dbname = "HareKrishnaSamacar";

// Create connection

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
$sql_id = "SELECT MAX(ID_EN)as maxid FROM tblMem";
$result_id = $conn_id->query($sql_id);

if ($result_id->num_rows > 0) {
    // output data of each row
    $row = $result_id->fetch_assoc();
          $GLOBALS['maxid']= $row["maxid"]+1;
    
} else {
    echo "0 results";
}
$conn_id->close();
?> 




<?php
 

 // Create connection
 $conn_trans_id = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_trans_id->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 mysqli_set_charset($conn_trans_id,"utf8");
 $sql_id = "SELECT MAX(transid)as maxid FROM tblMain";
 $result_id = $conn_trans_id->query($sql_id);
 
 if ($result_id->num_rows > 0) {
     // output data of each row
     $row = $result_id->fetch_assoc();
           $GLOBALS['maxtransid']= $row["maxid"]+1;
     
 } else {
     echo "0 results";
 }
 $conn_trans_id->close();
 ?> 



 <?php
 

 // Create connection
 $conn_idx_tblMain = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_idx_tblMain->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 mysqli_set_charset($conn_idx_tblMain,"utf8");
 $sql_idx = "SELECT MAX(idx)as maxidx FROM tblMain";
 $result_idx = $conn_idx_tblMain->query($sql_idx);
 
 if ($result_idx->num_rows > 0) {
     // output data of each row
     $row = $result_idx->fetch_assoc();
           $GLOBALS['maxidx']= $row["maxidx"]+1;
     
 } else {
     echo "0 results";
 }
 $conn_idx_tblMain->close();
 ?> 
 
 <script>

 function submitFunction(){

var po=   document.getElementById("postoffice").value ;
  document.getElementById("field1").innerHTML=po;


 }

  </script>
  <script>
function upazilaFunction(str) {



  if (str == "") {
        document.getElementById("upazila").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("upazila").innerHTML = this.responseText;



                                document.getElementById("kkk").innerHTML = str;

            }
        };
        xmlhttp.open("GET","upazila.php?q="+str,true);
        xmlhttp.send();
    }


    
}
</script>


 <script>
function postofficeFunction(str) {



  if (str == "") {
        document.getElementById("postoffice").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("postoffice").innerHTML = this.responseText;



 
            }
        };
        xmlhttp.open("GET","postoffice.php?q="+str,true);
        xmlhttp.send();
    }


    
}
</script>

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
           <p style= "cursor: pointer;text-align:center; color: yellow;" > Powered by <br> <a href="https://www.facebook.com/hksamacar/" target="_blank" style="color: white;" >@HareKrishnaSamacarIT</a> <br> <?php echo date("d-m-Y") ?> </p>
       
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
              <p class="well lead" style="margin-top: 50px;" > Subscriber Window </p>
            <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!-- Text input CNPJ e Razao Social-->
                    <div class="col-sm-8 contact-form"> <!-- div da direita -->

<!-- target='iframe_subs_new'  -->


                        <form id="contact" method="post" class="form" role="form"   action ="hks_subs_new_data.php">
                            <div class="row">
							
						        <div class="col-xs-6 col-md-8 form-group">
                                    <input class="form-control" id="inputCNPJ" name="sub_number" value="<?php echo  $GLOBALS['maxid'];?>" type="text" autofocus />
                                    <input class="form-control" id="inputCNPJ" name="trans_id" value="<?php echo  $GLOBALS['maxtransid'];?>" type="hidden" autofocus />
                                    <input class="form-control" id="inputCNPJ" name="maxidx_tblmain" value="<?php echo  $GLOBALS['maxidx'];?>" type="hidden" autofocus />

                                
                                </div>
                                <div class="col-xs-4 col-md-12 form-group">
                                    <input class="form-control" id="inputrazaosocial" name="sb_name" placeholder="Name" type="text" />
                                </div>
								<div class="col-xs-4 col-md-12 form-group">
                                    <input class="form-control" id="inputrazaosocial" name="sb_addr" placeholder="Address" type="text" />
                                </div>
                            </div>
							
                            <div class="row">									
                                <div class="col-xs-4 col-md-4 form-group">

<select   class="form-control"id="id_district" name="sb_dist" onchange="upazilaFunction(this.value);postofficeFunction(this.value)"  >
<option>District</option>
<?php

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, district_name FROM districts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value =".$row['id'].$row['district_name'].">".dist_en_bn($row['id'].$row['district_name'])."</option>";
 

        
    }
 } else {
 }
$conn->close();



 



?>

</select>


                                </div>
                                <div class="col-xs-4 col-md-4 form-group">
                                    <select class="form-control"id="upazila" name="sb_ps"onchange="upzilaFunction(this.value)"  >
                                       
 

 
									</select>
                                </div>


                                 <div class="col-xs-4 col-md-4 form-group">
                                    <select class="form-control"id="postoffice" name="sb_po" >
                                       
 

 
									</select>
                                </div>
								
                                <div class="col-xs-4 col-md-4 form-group">
									<input class="form-control" id="sb_poffice_bn" name="sb_poffice_bn" placeholder="Postoffice" type="text" />
								</div>
							
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="inputcidade"minlength="11" maxlength="11" size="11"   name="sb_phone1" placeholder="Phone1" type="text" required />
                                </div>
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="inputcidade" minlength="11" maxlength="11" size="11"  name="sb_phone2" placeholder="Phone2" type="text"    />
                                </div>
								<div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="inputcidade" name="sb_email" placeholder="Email" type="text" />
                                </div>
								
                            </div>
							<div class="row">
								<div class="col-xs-4 col-md-3 form-group">
									<div class="controls">
										<input class="form-control" id="inputcidade" name="sb_taka" placeholder="Donation" type="text" />
									</div>
								</div>
								<div class="col-xs-4 col-md-3 form-group">
									<div class="controls">
										<input class="form-control" id="inputcidade" name="sb_issue" placeholder="Issue" type="text" />
									</div>
								</div>
                                <div class="radio">
  <label><input type="radio" name="paymode" value="CASH">CASH  </label>
</div>
 
<div class="radio">
  <label><input type="radio" name="paymode" value="EPAY"> E-PAY </label>
</div>



        <div class="col-xs-4 col-md-6 form-group">
                                    <input required  class="form-control" id="subs_date" name="subs_date" value="<?php echo date("Y-m-d"); ?> " type="date" />
                                </div>
                            </div>


<div class="row">
								<div class="col-xs-4 col-md-8 form-group">
									<div class="controls">
                                    <textarea class="form-control" id="message" name="message" placeholder="Comments" rows="1"></textarea>
									</div>
								</div>


								<div class="col-xs-4 col-md-6 form-group">
 
 									
                                    
                                    
                                    <button class="btn btn-danger" data-toggle="modal" type="submit" data-target="#myModal"  onclick="submitFunction()" >Submit</button>
								
                                <!--   <button class="btn btn-danger" type="submit" data-toggle="modal" data-target="#myModal" onclick="submitFunction()" >Submit</button> -->




                                </div>
							</div>
                        </form>
                    </div> <!-- fim div da direita -->
				 
                </div> <!-- fim div da esquerda -->
            </div>
			<hr>
			<div style="max-height: 300px;" class="table-responsive">
			<table class="table table-bordered table-sm table-hover">
			  <thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Address</th>
					<th>District</th>
					<th>Mobile</th>
					<th>Comments</th>
				</tr>
			  </thead>
		      <tbody>
					 
                     
                    <?php

 
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
$sql_all = "SELECT ID_EN,Name,Des,Org,vill,po,ps,dist,mob,phone,email,comment FROM tblMem where ID_EN>9999 and status='CONT'";
$result_all = $conn_all->query($sql_all);

if ($result_all->num_rows > 0) {
    // output data of each row
    while($row = $result_all->fetch_assoc()){
           

echo '<tr>

<td>'.$row["ID_EN"].'</td>
<td> <form method="post" action="subs_individual_mod_data.php" target="iframe_subs_individual_mod"> <input type="hidden" name="id_en" value="'.$row["ID_EN"].'"><button type ="submit" class="btn btn-danger"  data-toggle="modal" data-target="#myModal_agent"  onclick="modFunction(this.value)" >'.$row["Name"].'</button></form></td>

 

<td>'.$row["Des"].','.$row["Org"].','.$row["vill"].','.$row["po"].','.$row["ps"].'</td>


<td>'.$row["dist"].'</td>
<td>'.$row["mob"]." ".$row["phone"]." ".$row["email"].'</td>

<td>'.$row["comment"].'</td>
</tr>
';
    }
    
} else {
    echo "0 results";
}
$conn_all->close();

                    ?>

                  

			  </tbody>
			
			</table>
			</div>
            </div>
          </div>
        </div>
    </div>
      



</div>




</div> <!-- end of row -->

</div> <!-- end of container -->

 
 <iframe name='iframe_subs_new' height="0" width="0" scrolling="no" style="border:0"></iframe> 
 <iframe name='iframe_subs_new' height="0" width="0" scrolling="no" style="border:0"></iframe> 

<iframe name='iframe_subs_new_update' height="0" width="0" scrolling="no" style="border:0"></iframe> 

</body>
</html>