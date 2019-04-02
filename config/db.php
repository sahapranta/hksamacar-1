<?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'root'; //"HKSamacar_local"
$db['db_pass'] = ''; //"Jpsk/1866"
$db['db_name'] = 'hksamacar'; //"HareKrishnaSamacar"

foreach ($db as $key => $value) {
    define (strtoupper($key), $value);
}

$conn_all = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn_all->connect_error) {
         die("Connection failed: " . $conn_all->connect_error);
    }
mysqli_set_charset($conn_all,"utf8");