<?php include 'session_check.php';?>
<?php include 'Layout/header.php';?>
<body>
 <!-- The Modal -->
 <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
        <iframe name='ag_book_action_mod' height="220" width="100%" scrolling="no" style="border:0"></iframe>
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
					<th>Address, Mobile</th>
          <th>District</th>
          <th>Phone</th>
					<th>QTY</th>
					<th>Status</th>
					<th>Action</th>

				</tr>
			  </thead>
		      <tbody>
<?php
    $type = "All";
    if($_POST['type']){
      $type = $_POST["type"];
    }
    if ($type == "All") {
        $status = "%";
    }
    if ($type == "Active") {
        $status = "CONT";
    }
    if ($type == "Inactive") {
        $status = "DISCONT";
    }
    $search = $_POST['ag_search'];
    $sql_all = "SELECT ID_EN,Name,Des,Org,vill,po,ps,dist,mob,phone,email,status,comment,ag_quantity FROM tblMem  where
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
    ) AND (ID_EN<10000) AND status LIKE '$status' ";
    $result_all = $conn_all->query($sql_all);
    if ($result_all->num_rows > 0) {
        while ($row = $result_all->fetch_assoc()) {
          $en_id = ps_en_bn(id_ps($row['ID_EN']));
          $bn_dist = dist_en_bn(id_dist($row['ID_EN']));
        echo "<tr>
  <td>
    <form method ='post' target='iframe_ag_book_individual_summary' action='ag_book_individual_summary.php'>
      <input type='hidden' name='ag_name' value='{$row["Name"]}'>
      <input type='hidden' name='ag_id_en' value='{$row["ID_EN"]}'>
      <button  type='submit' class='btn btn-info btn-sm' >{$row["ID_EN"]}</button>
    </form>
  </td>
  <td>
    <form method='post' action='ag_individual_mod_data.php' target='iframe_ag_individual_mod'>
      <input type='hidden' name='id_en' value='{$row["ID_EN"]}'>
      <button type ='submit' class='btn btn-success'  data-toggle='modal' data-target='#myModal_agent'>{$row["Name"]}</button>
    </form>
  </td>
  <td>{$row["vill"]}, {$row["po"]}, {$en_id}</td>
  <td>{$bn_dist}</td>
  <td>{$row["mob"]}</td>
  <td>{$row["ag_quantity"]}</td>
  <td>{$row["status"]}</td>
  <td>
    <form method ='post' target='ag_book_action_mod' action='ag_book_action_mod_data.php'>
      <input type='hidden' name='ag_id_en' value='{$row["ID_EN"]}'>
      <input type='hidden' name='status' value='{$row["status"]}'>
      <input type='hidden' name='ag_quantity' value='{$row["ag_quantity"]}'>
      <button  type='submit' data-target='#myModal1' data-toggle='modal' class='btn btn-warning btn-sm' >
        <i class='fa fa-paper-plane'></i>
      </button>
    </form>
  </td>
</tr>
";
    }

} else {
    echo "0 results";
}
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
<?php include 'Layout/footer.php';?>