<option>Post Office</option>
<?php include_once 'config/db.php'; ?>
<?php
$sb_dist = preg_replace('/[0-9]+/', '', $_GET['q']);
$sql = "SELECT suboffice, postcode FROM postoffices where district='$sb_dist' order by suboffice asc";
$result = $conn_all->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option>".$row['suboffice']."-".$row['postcode']."</option>";   
    }
 } else {
    echo "<option>Not Found</option>";
}

?>