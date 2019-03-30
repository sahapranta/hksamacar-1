<?php session_start();?>
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
<script>
var mod_val;
function modFunction(val_mod){

  document.getElementById("ag_name_mod1").value = val_mod[1];

  


}
</script>
<body>

   <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"id="ag_name_head_mod"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
 
        <h3 id="agent_number_mod"></h3>
        <h3 id="trans_id_mod"></h3>
        <h3 id="ag_name_mod"></h3>
        <h3 id="id_dis_mod"></h3>
        <h3 id="ag_addr_mod"></h3>
        <h3 id="ag_ps_mod"></h3>
        <h3 id="ag_po_mod"></h3>
        <h3 id="ag_poffice_bn_mod"></h3>
        <h3 id="ag_mobile1_mod"></h3>
        <h3 id="ag_mobile2_mod"></h3>
        <h3 id="ag_copies_mod"></h3>
        <h3 id="ag_email_mod"></h3>
       
        <h3 id="ag_comment_mod"></h3>


        
         
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
 

// Create connection
$conn_id = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_id->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn_id,"utf8");
$sql_id = "SELECT MAX(ID_EN)as maxid FROM tblMem where ID_EN <10000";
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
 $conn_id_cour = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn_id_cour->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 mysqli_set_charset($conn_id_cour,"utf8");
 $sql_id_cour = "SELECT MAX(ID_EN)as maxid_cour FROM tblMem where ID_EN <96";
 $result_id_cour = $conn_id_cour->query($sql_id_cour);
 
 if ($result_id_cour->num_rows > 0) {
     // output data of each row
     $row = $result_id_cour->fetch_assoc();
          $GLOBALS['maxid_courier']= $row["maxid_cour"]+1;
     
 } else {
     echo "0 results";
 }
 $conn_id_cour->close();
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


  var ag_name=   document.getElementById("ag_name").value ;
 var agent_number=   document.getElementById("agent_number").value ;
document.getElementById("ag_name_head_mod").innerHTML="Hare Krishna,"+ag_name+",Congratulation!";





document.getElementById("ag_name_mod").innerHTML="Name:"+ag_name;

 document.getElementById("agent_number_mod").innerHTML="Agent No.:"+agent_number;


var trans_id=   document.getElementById("trans_id").value ;
  document.getElementById("trans_id_mod").innerHTML="Transaction ID:"+trans_id;

   
  var ag_addr=   document.getElementById("ag_addr").value ;
  document.getElementById("ag_addr_mod").innerHTML="Address:"+ag_addr;
  
  var id_district=   document.getElementById("id_district").value ;
  document.getElementById("id_dis_mod").innerHTML="District:"+id_district;
  var ag_ps=   document.getElementById("upazila").value ;
  document.getElementById("ag_ps_mod").innerHTML="Police Station:"+ag_ps;
 
  var ag_po=   document.getElementById("postoffice").value ;
  document.getElementById("ag_po_mod").innerHTML="Post Office:"+ag_po;
 
  var ag_poffice_bn=   document.getElementById("ag_poffice_bn").value ;
  document.getElementById("ag_poffice_bn_mod").innerHTML="POST/BN:"+ag_poffice_bn;
 
  var ag_mobile1=   document.getElementById("ag_mobile1").value ;
  document.getElementById("ag_mobile1_mod").innerHTML="Phone 1:"+ag_mobile1;
 
  var ag_mobile2=   document.getElementById("ag_mobile2").value ;
  document.getElementById("ag_mobile2_mod").innerHTML="Phone 2:"+ag_mobile2;
 
  var ag_copies=   document.getElementById("ag_copies").value ;
  document.getElementById("ag_copies_mod").innerHTML="Agent Copies:"+ag_copies;
 
  var ag_email=   document.getElementById("ag_email").value ;
  document.getElementById("ag_email_mod").innerHTML="Email:"+ag_email;
 
  var ag_comment=   document.getElementById("ag_comment").value ;
  document.getElementById("ag_comment_mod").innerHTML="Comment:"+ag_comment;
 
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
           <p style= "cursor: pointer;text-align:center; color: yellow;" > Powered by <br> <a href="https://www.facebook.com/harekrishnasamacar/" target="_blank" style="color: white;" >@HareKrishnaSamacarIT</a> <br> <?php echo date("d-m-Y"); ?> </p>
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

              <p class="well lead" style=" margin-top: 10px;" > Agent Window </p>
            <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!-- Text input CNPJ e Razao Social-->
                    <div class="col-sm-12 contact-form"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" role="form" target='iframe_ag_new' action ="hks_agent_new_data.php" >
                            <div class="row">
							
								<div class="col-xs-6 col-md-6 form-group">
                                    <select required class="form-control"id="paymode_option" onchange="paymode_Option()" name="ag_type" required autofocus >
                                        <option value="Receive Mode">Receive Mode</option>
                                        <option value="Post Office">Post Office</option>
                                        <option value="Courier">Courier </option>
 									</select>
                                </div>
							
                                <div class="col-xs-6 col-md-6 form-group">
                                 
                                 <input class="form-control" id="agent_number" name="ag_number"  type="text"/>

                                <input class="form-control" id="trans_id" name="trans_id" value="<?php echo  $GLOBALS['maxtransid'];?>" type="hidden"/>
                                <input class="form-control" id="inputCNPJ" name="maxidx_tblmain" value="<?php echo  $GLOBALS['maxidx'];?>" type="hidden" />
                                </div>

<div id="courier" style="display:none" >

<div class="col-xs-4 col-md-12 form-group">
                                    <input    class="form-control" id="" name="courier_name" value="" placeholder="Courier Name" type="text" />
                                </div>
								<div class="col-xs-4 col-md-12 form-group">
                                    <input   class="form-control" id="" name="courier_description" value="" placeholder="Courier Description" type="text" />
                                </div>
</div>






                                <div class="col-xs-4 col-md-12 form-group">
                                    <input  required class="form-control" id="ag_name" name="ag_name" placeholder="Name" type="text" />
                                </div>
								<div class="col-xs-4 col-md-12 form-group">
                                    <input required class="form-control" id="ag_addr" name="ag_addr" placeholder="Address" type="text" />
                                </div>
                            </div>
							
                            <div class="row">							
							
                                <div class="col-xs-4 col-md-4 form-group">
                                    
<select   class="form-control"id="id_district" name="ag_dist" onchange="upazilaFunction(this.value);postofficeFunction(this.value)"  >
<option>District</option>
<?php

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, district_name FROM districts order by district_name asc";
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
                                <select required class="form-control"id="upazila" name="ag_ps"onchange="upzilaFunction(this.value)"  >
                                       
 
                                </select>
                                </div>
                                <div class="col-xs-4 col-md-4 form-group">
                                    <select class="form-control"id="postoffice" name="ag_po" >
                                       
 

 
									</select>
                                </div>
                                <div class="col-xs-4 col-md-4 form-group">
									<input required class="form-control" id="ag_poffice_bn" name="ag_poffice_bn" placeholder="POST-BANGLA" type="text" />
								</div>
							
                                <div class="col-xs-6 col-md-6 form-group">
                                    <input required class="form-control" id="ag_mobile1" minlength="11" maxlength="11" size="11"   name="ag_mobile1" placeholder="Mobile 1" type="text" required/>
                                </div>
								<div class="col-xs-6 col-md-6 form-group">
                                    <input class="form-control" id="ag_mobile2" minlength="11" maxlength="11" size="11"  name="ag_mobile2" placeholder="Mobile 2" type="text" />
                                </div>
								
								<div class="col-xs-4 col-md-3 form-group">
                                <input required  required class="form-control" id="news_rate" name="news_rate" placeholder="@" type="text" />
  
                                </div>
								
								<div class="col-xs-4 col-md-3 form-group">
                                    <input required class="form-control" id="ag_copies" name="ag_copies" placeholder="No. Copies" type="text" />
                                </div>
                                <div class="col-xs-4 col-md-6 form-group">
                                    <input class="form-control" id="ag_email" name="ag_email" placeholder="E-mail" type="email" />
                                </div>


                                 

                                <div class="col-xs-4 col-md-6 form-group">
                                    <input required  class="form-control" id="ag_date" name="ag_date" value="<?php echo date("Y-m-d"); ?> " type="date" />
                                </div>
                            </div>
 
							<div class="row">
								<div class="col-xs-4 col-md-8 form-group">
									<div class="controls">
                                    <textarea class="form-control" id="message" name="message" placeholder="Comments" rows="3"></textarea>
									</div>
								</div>
								<div class="col-xs-4 col-md-4 form-group">
  <br> <br>
									<button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal" onclick="submitFunction()" >Submit</button>
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
$sql_all = "SELECT ID_EN,Name,Des,Org,vill,comment,po,ps,dist,mob,phone,email FROM tblMem where ID_EN<10000  ";
$result_all = $conn_all->query($sql_all);

if ($result_all->num_rows > 0) {
    // output data of each row
    while($row = $result_all->fetch_assoc()){
   $aa=  array($row["ID_EN"],$row["Name"]);        

echo '<tr>

<td>'.$row["ID_EN"].'</td>
 
<td> <form method="post" action="ag_individual_mod_data.php" target="iframe_ag_individual_mod"> <input type="hidden" name="id_en" value="'.$row["ID_EN"].'"><button type ="submit" class="btn btn-danger"  data-toggle="modal" data-target="#myModal_agent"  onclick="modFunction(this.value)" >'.$row["Name"].'</button></form></td>

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








  <!-- The Modal agent  -->
  <div class="modal" id="myModal_agent">
    <div class="modal-dialog">
      <div class="modal-content">
      
      
        
        <!-- Modal body -->

        <div class="modal-body">
        <iframe name='iframe_ag_individual_mod' height="700" width="100%" scrolling="yes" style="border:0"></iframe> 

         
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>



















<iframe name='iframe_ag_new' height="0" width="0" scrolling="no" style="border:0"></iframe> 

<iframe name='iframe_ag_new_update' height="0" width="0" scrolling="no" style="border:0"></iframe> 

</body>

<script>
function paymode_Option() {
    var x = document.getElementById("paymode_option").value;

if (x=="Courier"){

 document.getElementById("courier").style.display = "block";

}
else{

 document.getElementById("courier").style.display = "none";


}
     
 var id_cour=       "<?php echo $GLOBALS['maxid_courier']; ?>";
 var id_postoffice= "<?php echo $GLOBALS['maxid']; ?>";
 if(x=='Post Office'){
    document.getElementById("agent_number").value = id_postoffice;
 
}

 if(x=='Courier'){
    document.getElementById("agent_number").value = id_cour;
 
}

}
</script>
</html>