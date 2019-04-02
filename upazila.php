<option>Police Station</option>
<?php
include "function.php";

$sb_dist = intval($_GET['q']);
$sql = "SELECT id,district_id, upazila_name FROM upazilas where district_id='$sb_dist' order by upazila_name asc ";
$result = $conn_all->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value =".$row['upazila_name'].">".ps_en_bn($row['upazila_name'])."</option>";      
    }
 } else {
 }
?>