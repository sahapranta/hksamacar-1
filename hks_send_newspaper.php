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
function send_newspaper_individual_data(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("id_search").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("id_search").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "id_search_data.php?q="+str, true);
  xhttp.send();   
}
</script>
<body>

<?php
$servername = "localhost";
$username = "HKSamacar_local";
$password = "Jpsk/1866";
$dbname = "HareKrishnaSamacar";

// Create connection

?> 
<?php





// Create connection
$conn_idc = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_idc->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn_idc,"utf8");
$m_id=$year.$send_single_issue.$GLOBALS['type_id'];


$sql_id = "SELECT count(ID_EN),status,ag_quantity FROM tblMem where ID_EN <10000 AND ID_EN >99 AND ag_quantity>0 AND status='CONT'";

$result_id = $conn_idc->query($sql_id);

if ($result_id->num_rows > 0) {
    // output data of each row
   $row = $result_id->fetch_assoc();

 
    if(($row["count(ID_EN)"]==null) || ($row["count(ID_EN)"]=="")){
      $GLOBALS['ag_count']=0;


    }
    else{
         $GLOBALS['ag_count']=$row["count(ID_EN)"];

    }

    
} else {
    echo "0 results";
}
$conn_idc->close(); 







// Create connection
$conn_idc_ag = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_idc_ag->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn_idc_ag,"utf8");
$m_id=$year.$send_single_issue.$GLOBALS['type_id'];

$sql_id = "SELECT count(ID_EN),status,ag_quantity FROM tblMem where ID_EN <100 AND ID_EN >0 AND ag_quantity>0 AND status='CONT'";

 
$result_id = $conn_idc_ag->query($sql_id);

if ($result_id->num_rows > 0) {
    // output data of each row
   $row = $result_id->fetch_assoc();

 
    if(($row["count(ID_EN)"]==null) || ($row["count(ID_EN)"]=="")){
      $GLOBALS['cour_count']=0;


    }
    else{
         $GLOBALS['cour_count']=$row["count(ID_EN)"];

    }

    
} else {
    echo "0 results";
}
$conn_idc_ag->close(); 
















// Create connection
$conn_idc_sub = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_idc_sub->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn_idc_sub,"utf8");
$m_id=$year.$send_single_issue.$GLOBALS['type_id'];

$sql_id = "SELECT count(ID_EN),status,ag_quantity,balance FROM tblMem where ID_EN >10000 AND ID_EN >0 AND balance>0 AND status='CONT'";

 
$result_id = $conn_idc_sub->query($sql_id);

if ($result_id->num_rows > 0) {
    // output data of each row
   $row = $result_id->fetch_assoc();

 
    if(($row["count(ID_EN)"]==null) || ($row["count(ID_EN)"]=="")){
      $GLOBALS['sub_count']=0;


    }
    else{
         $GLOBALS['sub_count']=$row["count(ID_EN)"];

    }

    
} else {
    echo "0 results";
}
$conn_idc_sub->close(); 




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
           <p style= "cursor: pointer;text-align:center; color: yellow;" > Powered by <br> <a href="https://www.facebook.com/hksamacar/" target="_blank" style="color: white;" >@HareKrishnaSamacarIT</a> <br> <?php echo date("d-m-Y") ?> </p>
        <br> <p>  <?php include_once "hks_user.php" ;   ?></p>
     
        </div>
</div>
  
<div class="col-md-10 col-xl-10">


      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
              <div class="col-md-12">
              <p class="well lead" style="margin-top: 30px;" > Send Articles through Post/Courier </p>
            <div class="col-sm-12 col-md-12  contact-form" >
                <div class="row"> <!-- div da esquerda -->
                    <!-- Text input CNPJ e Razao Social-->
                    <div class="col-sm-12 contact-form" style="background-color: cornsilk;"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" id="txt1"  action="send_newspaper_individual_data.php" role="form">
                          
							<div class="row" style="background-color: cornsilk; padding: 10px 0px 0px 0px">
								<div class="col-xs-4 col-md-4 form-group">

                                <div class="form-group row">
                                    <label for="isn" class="col-sm-6 col-form-label" style="font-size: 18px; font-weight: bold;">Send Single Issue</label>
                                    <div class="col-sm-6" >
                                    <input class="form-control" id="inputcidade" name="send_single_id" placeholder="Type ID" type="text" required onkeyup="send_newspaper_individual_data(this.value)" />
                                    </div>
                                </div>
                                </div>
								<div class="col-xs-3 col-md-3 form-group">									
									<input class="form-control" id="inputcidade" name="send_single_date" placeholder="Type Date" required type="date" />
                                </div>
								<div class="col-xs-3 col-md-3 form-group" >
                                    <select class="form-control"id="selectbasic" name="send_single_issue" required >
                                        <option value="" >Issue No.</option>
                                     
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT issue FROM products where status='krishna'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value =".$row['issue'].">".$row['issue']."</option>";
 

        
    }
 } else {
 }
$conn->close();


?>

</select>

</div>
                                <div class="col-xs-2 col-md-2 form-group" style="text-aling: right; padding: 0px 0px 0px 0px">
									<button class="btn btn-large btn-danger" type="submit" >Send</button>
								</div>
							</div>
							<hr style="background-color: transparent; border: 1px solid red; margin: 0em 0em 0em 0em; " noshade>
							<div class="row" style="background-color: cornsilk;">
								<div id="id_search" class="table-responsive" style="padding: 15px;">
						
								</div>
            				</div>
                        </form>
                    </div> <!-- fim div da direita -->
					
                </div> <!--End of Single -->
            </div>
			<hr>
			        <div class="col-sm-12 col-md-12  contact-form" style="background-color: #ffd7eb;"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" action="send_newspaper_all_data.php" role="form">
							<div class="row" style="background-color: #ffd7eb; padding: 10px 0px 0px 0px">
								<div class="col-xs-4 col-md-4 form-group">

                                <div class="form-group row">
                                    <label for="isn" class="col-sm-6 col-form-label" style="font-size: 18px; font-weight: bold;">Send Full Issue</label>
                                    <div class="col-sm-6" >
                                    <input class="form-control" id="inputcidade" name="send_all_date" required type="date"/>                                    </div>
                                </div>									
									
                                </div>
								<div class="col-xs-4 col-md-4 form-group" >
                <select class="form-control"id="selectbasic" name="send_single_issue" required >
                                        <option value="" >Issue No.</option>
                                     
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT issue FROM products where status='krishna'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value =".$row['issue'].">".$row['issue']."</option>";
        
    }
 } else {
 }
$conn->close();

?>

</select>

                                </div>
                                <div class="col-xs-4 col-md-4 form-group" style="text-aling: right; padding: 0px 0px 0px 0px">
									<button class="btn btn-primary " type="submit"name="type" value="Courier" >Courier</button> 
									<button class="btn btn-success" type="submit" name="type" value="Agents" >Agents</button>
									<button class="btn btn-warning" type="submit"  name="type" value="Subscribers" >Subscribers</button>
									<button class="btn btn-danger" type="submit" name="type" value="All" >All</button>
								</div>
							</div>
							<hr style="background-color: transparent; border: 1px solid red; margin: 0em 0em 0em 0em; " noshade>
							<div class="row" style="background-color: cornsilk;">
								<div class="table-responsive" style="padding: 15px;">
									<table class="table table-bordered table-sm ">
										<tbody>
										<tr>
											<td>Courier</td>
											<td><?php echo $GLOBALS['cour_count'];?></td>
											<td>Post Office (VP)</td>
                                            <td><?php echo $GLOBALS['ag_count'];?></td>
											<td>Subscribers (RP)</td>
                                            <td><?php echo $GLOBALS['sub_count'];?></td>
											<td>Grand Total</td>
                                            <td><?php echo (intval($GLOBALS['cour_count'])+intval($GLOBALS['ag_count'])+intval($GLOBALS['sub_count']));?></td>
                                            <td><a> Get Report</a></td>
										</tr>
										</tbody>
									</table>
								</div>
            				</div>
                        </form>
                    </div> <!-- End of Multiple -->
								<hr>


			        <div class="col-sm-12 col-md-12  contact-form" style="background-color: #ffd7eb;"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" target="_blank" action="hks_print_redirect.php" role="form">
                            	<div class="row" style="background-color: #ffd7eb; padding: 10px 0px 0px 0px">
								<div class="col-xs-4 col-md-4 form-group" >
                                <div class="form-group row">
                                    <label for="isn" class="col-sm-6 col-form-label" style="font-size: 18px; font-weight: bold;"> Print Report</label>
                                    <div class="col-sm-6" >
                                    <input type="text" class="form-control" id ="isn" name="issue_no" placeholder="Issue No." required >
                                    </div>
                                </div>
                                </div>
								<div class="col-xs-4 col-md-4 form-group">
                                    <select class="form-control"id="selectbasic" name="print_type" required >
                                        <option value="" >Select One</option>
                                        <option value="Binding Summary All">Binding Summary All</option>
                                        <option value="Courier Packing Label">Courier Packing Label</option>
                                        <option value="Courier Invoice">Courier Invoice</option>
										<option value="Courier Summary List">Courier Summary List</option>
                                        <option value="PO Packing Label">PO Packing Label</option>
                                        <option value="PO VP Form">PO VP Form</option>
                                        <option value="PO VPP Form">PO VPP Form</option>
                                        <option value="PO VP Despatch">PO VP Despatch</option>
                                        <option value="PO VPP Despatch">PO VPP Despatch</option>

                                        <option value="PO RP Despatch">PO RP Despatch</option>

                                        <option value="PO Summary List">PO Summary List</option>
                                        <option value="VP Entry List">VP Entry List</option>
                                        
                                        <option value="Subscriber Packing Label">Subscriber Packing Label</option>
										
                                        <option value="Subscriber Summary List">Subscriber Summary List</option>
                                         
                                       
                                       
                                        </select>
                                </div>
								 
                                <div class="col-xs-4 col-md-4 form-group" style="padding: 0px 0px 0px 0px">
									<button class="btn btn-danger" type="submit" >Print</button>
								</div>
							</div>
							<hr style="background-color: transparent; border: 1px solid red; margin: 0em 0em 0em 0em; " noshade>
						
                        </form>
                    </div> <!-- End of Report Print -->
                    <hr>

			        <div class="col-sm-12 col-md-12  contact-form" style="background-color: #ffd7eb;"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" target="_blank" action="hks_print_redirect.php" role="form">
                            	<div class="row" style="background-color: #ffd7eb; padding: 10px 0px 0px 0px">
								<div class="col-xs-4 col-md-4 form-group" >
                                <div class="form-group row">
                                    <label for="isn" class="col-sm-6 col-form-label" style="font-size: 18px; font-weight: bold;"> Single Report</label>
                                    <div class="col-sm-6" >
                                    <input type="text" class="form-control" id ="isn" name="issue_no" placeholder="Trnx ID." required >
                                    </div>
                                </div>
                                </div>
								<div class="col-xs-4 col-md-4 form-group">
                                    <select class="form-control"id="selectbasic" name="print_type" required >
                                        <option value="" >Select One</option>
                                        <option value="Courier Packing Label">Courier Packing Label</option>
                                        <option value="Courier Invoice">Courier Invoice</option>
                                        <option value="PO Packing Label">PO Packing Label</option>
                                        <option value="PO VP Form">PO VP Form</option>
                                        <option value="Subscriber Packing Label">Subscriber Packing Label</option>
									</select>
                                </div>
								 
                                <div class="col-xs-4 col-md-4 form-group" style="padding: 0px 0px 0px 0px">
									<button class="btn btn-danger" type="submit" >Print</button>
								</div>
							</div>
							<hr style="background-color: transparent; border: 1px solid red; margin: 0em 0em 0em 0em; " noshade>
						
                        </form>
                    </div> <!-- End of Report Print -->



                    <hr>

<div class="col-sm-12 col-md-12  contact-form" style="background-color: #ffd7eb;"> <!-- div da direita -->
            <div class="row" style="background-color: #ffd7eb; padding: 10px 0px 0px 0px">
            <div class="col  form-group" >
             
            </div>
    
             
            <div class="col  form-group" style="padding: 0px 0px 0px 0px">
            <form id="contact" method="post" class="form" target="_blank" action="hks_vp_entry.php" role="form">
                <button class="btn btn-info" type="submit" >VP Entry</button>
            </form>
            </div>

            <div class="col  form-group" style="padding: 0px 0px 0px 0px">
            <form id="contact" method="post" class="form" target="_blank" action="hks_vpp_entry.php" role="form">
                <button class="btn btn-info" type="submit" >VPP Entry</button>
            </form>
            </div>


            <div class="col  form-group" style="padding: 0px 0px 0px 0px">
            <form id="contact" method="post" class="form" target="_blank" action="hks_rp_entry.php" role="form">
                <button class="btn btn-info" type="submit" >RP Entry</button>
            </form>
            </div>

            <div class="col  form-group" style="padding: 0px 0px 0px 0px">
            <form id="contact" method="post" class="form" target="_blank" action="hks_despatch_vp_entry.php" role="form">
                <button class="btn btn-danger" type="submit" >Despatch (VP)</button>
            </form>
            </div>




          
            <div class="col  form-group" style="padding: 0px 0px 0px 0px">
            <form id="contact" method="post" class="form" target="_blank" action="hks_despatch_vpp_entry.php" role="form">
                <button class="btn btn-danger" type="submit" >Despatch (VPP)</button>
            </form>
            </div>


            <div class="col  form-group" style="padding: 0px 0px 0px 0px">
            <form id="contact" method="post" class="form" target="_blank" action="hks_despatch_rp_entry.php" role="form">
                <button class="btn btn-danger" type="submit" >Despatch (RP)</button>
            </form>
            </div>


            <div class="col-xs-3 col-md-3 form-group" >
             
            </div>


        </div>
        <hr style="background-color: transparent; border: 1px solid red; margin: 0em 0em 0em 0em; " noshade>
    
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