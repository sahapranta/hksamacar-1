<?php include 'Layout/header.php'; ?> 
<?php include 'session_check.php'; ?> 
<body>
 
<?php
  $ag_name=$_POST['ag_name'];
  $ag_id_en=$_POST['ag_id_en'];
?>
<div  style="background-color: #ffffdc" >
  <h3> <?php  echo $ag_id_en.".".$ag_name; ?></h3>
  <div class="table-responsive">
    <table class="table table-bordered table-sm table-hover">
      <thead>
        <tr>
          <th>Sent Date</th>
          <th>Issue</th>
          <th>VP/ID</th>
          <th>QTY</th>
          <th>Received Taka</th>
          <th>Return</th>
          <th>Date</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>   
<?php
  date_default_timezone_set("Asia/Dhaka");
  $cdate= date("m/d/Y h:i:sa");
  $rdate= date("m/d/Y");
  $sql_all = "SELECT 	idn , transid ,	SentCopy 	,vername ,	SentDate ,	sent ,	Returned ,
  Resend, 	Dr ,	Cr ,	statusID ,	VPNo ,	VPDate ,	agcpy ,	Rdate ,	resrcpy ,
      Comment ,	id 	,Speciment FROM tblIssue WHERE 
  transid= '".$ag_id_en."'";
  $result_all = $conn_all->query($sql_all);

  if ($result_all->num_rows > 0) {
      while($row = $result_all->fetch_assoc()){
        $return = ($row["Comment"]!="") ? 'RETURN': $row["Returned"] ;
        echo
            "<tr>
              <td>{$row["SentDate"]}</td>
              <td>{$row["vername"]}</td>
              <td>{$row["VPNo"]}</td>
              <td>{$row["agcpy"]}</td>
              <td>{$row["Dr"]}</td>
              <td>{$return}</td>
              <td>{$row["Rdate"]} {$row["VPDate"]}</td>
              <td>{$row["Comment"]}</td>
            </tr>";
      }
  } else {
      echo "0 results";
  }
?>
      </tbody>
    </table>
  </div>
</div>
<?php include 'Layout/footer.php'; ?>