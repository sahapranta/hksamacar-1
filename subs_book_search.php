<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

<title>Subscriber Book</title>


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
 <!-- The Modal -->
 <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        
        
        <!-- Modal body -->
        <div class="modal-body">
        
 

    
        
	<iframe name='subs_book_action_mod' height="220" width="100%" scrolling="no" style="border:0"></iframe> 
 
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  





 <!-- The Modal -->
 <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        
        
        <!-- Modal body -->
        <div class="modal-body">
        
 

    
        
 	<iframe name='subs_book_action_renew_mod' height="250" width="100%" scrolling="YES" style="border:0"></iframe> 

         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>








</div>



<div class="table-responsive">
			<table   class="table table-bordered table-sm table-hover">
			  <thead>
				<tr>
					<th>#</th>
					<th>Name</th>
          <th>Address</th>
          <th>Mobile</th>
					<th>District</th>
					<th>Balance</th>
					<th>Status</th>
          <th>Description</th>

					<th>Action</th>
		 
				</tr>
			  </thead>
		      <tbody>
				 
					                








  
  <?php
   include_once "function.php";
  $search=$_POST['ag_search'];

  

  $type=$_POST["type"];

  if($type=="All"){
   
  $status="%";
  
  }
  
  if($type=="Active"){
     
      $status="CONT";	
    
    }
  
    if($type=="Inactive"){
       
          $status="DISCONT";			
      
      }
  
 
      if($type=="Pending"){
       
        $status="PENDING";			
    
    }
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
$sql_all = "SELECT ID_EN,Name,Des,Org,vill,po,po_bn,ps,dist,mob,phone,email,description,status,ag_quantity,balance,comment FROM tblMem  where  

    (ID_EN  LIKE '%$search%' 

 OR Name  LIKE '%$search%'
 OR Des  LIKE '%$search%'
 OR Org  LIKE '%$search%'
 OR vill  LIKE '%$search%'
 OR po  LIKE '%$search%'
 OR ps  LIKE '%$search%'
 OR dist  LIKE '%$search%'
 OR mob  LIKE '%$search%'
 OR phone  LIKE '%$search%'
 OR email  LIKE '%$search%'
 
 
 ) AND (ID_EN>10000)  and status like '$status' ";
$result_all = $conn_all->query($sql_all);

if ($result_all->num_rows > 0) {
    // output data of each row
    while($row = $result_all->fetch_assoc()){
           

echo '<tr>
<td>
<form method ="post" target="iframe_subs_book_individual_summary" action="subs_book_individual_summary.php">


<button  type="submit" class="btn btn-info btn-sm" >'.$row["ID_EN"].'</button>
<input type="hidden" name="ag_name" value="'.$row["Name"].'">
<input type="hidden" name="ag_id_en" value="'.$row["ID_EN"].'">
</form>

</td>
<td> <form method="post" action="ag_individual_mod_data.php" target="iframe_ag_individual_mod"> <input type="hidden" name="id_en" value="'.$row["ID_EN"].'"><button type ="submit" class="btn btn-success"  data-toggle="modal" data-target="#myModal_agent"  onclick="modFunction(this.value)" >'.$row["Name"].'</button></form></td>


<td>'.$row["vill"].','.$row["po_bn"].''.$row["po"].','.ps_en_bn($row["ps"]).'</td>



<td>'.dist_en_bn(id_dist($row["ID_EN"])).'</td>

<td>'.$row["mob"].'</td>
<td>'.$row["balance"].'</td>

<td>'.$row["status"].'</td>
<td>'.$row["description"].'</td>

<td> 


<form method ="post" target="subs_book_action_mod" action="subs_book_action_mod_data.php">
<input type="hidden" name="ag_id_en" value="'.$row["ID_EN"].'">
<input type="hidden" name="status" value="'.$row["status"].'">
<input type="hidden" name="ag_quantity" value="'.$row["ag_quantity"].'">

<button  type="submit" data-target="#myModal1" data-toggle="modal" class="btn btn-danger btn-sm" > UPDATE</button>
</form><form method ="post" target="subs_book_action_renew_mod" action="subs_book_action_renew_mod_data.php">
<input type="hidden" name="ag_id_en" value="'.$row["ID_EN"].'">
<input type="hidden" name="status" value="'.$row["status"].'">
 
<input type="hidden" name="ag_quantity" value="'.$row["ag_quantity"].'">

<button  type="submit" data-target="#myModal2" data-toggle="modal" class="btn btn-info btn-sm" >RENEW</button>
</form>







</td>

 

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
			 
                   
<!-- The Modal agent  -->
<div class="modal" id="myModal_agent">
    <div class="modal-dialog">
      <div class="modal-content">
      
      
        
        <!-- Modal body -->

        <div class="modal-body">
        <iframe name='iframe_ag_individual_mod' height="620" width="100%" scrolling="no" style="border:0"></iframe> 

         
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
                  

			 
            </body>
            </html>