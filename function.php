<?php include "config/db.php"?>

<?php
function id_name($a)
{
    global $conn_all;
    $sql_all = "SELECT Name FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["Name"];
    }
    // $conn_all->close();
}

function id_phone($a)
{
    global $conn_all;
    $sql_all = "SELECT vill,po,phone,mob,email FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["mob"];
    }
    // $conn_all->close();
}

function id_mobile($a)
{
    global $conn_all;
    $sql_all = "SELECT vill,po,phone,mob,email FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["phone"];
    }

    // $conn_all->close();
}

function id_address($a)
{
    global $conn_all;
    $sql_all = "SELECT vill,Des,Org,dist FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["Des"] . $row["Org"] . $row["dist"];
    }
    // $conn_all->close();
}

function id_vill($a)
{
    global $conn_all;
    $sql_all = "SELECT vill,Des,Org,dist FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["vill"];
    }
    // $conn_all->close();
}

function id_balance($a)
{
    global $conn_all;
    $sql_all = "SELECT balance FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["balance"];
    }
    // $conn_all->close();
}

function id_courier_name($a)
{
    global $conn_all;
    $sql_all = "SELECT courier_name FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["courier_name"];
    }
    // $conn_all->close();
}

function id_courier_description($a)
{
    global $conn_all;
    $sql_all = "SELECT courier_description FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();

        return $row["courier_description"];

    }
    // $conn_all->close();

}

function id_news_rate($a)
{
    global $conn_all;
    $sql_all = "SELECT news_rate FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();

        return $row["news_rate"];

    } else {

    }
    // $conn_all->close();

}

function quan_range($ver, $quan)
{
    global $conn_all;
    $sql_all = "SELECT VPNo FROM tblIssue   where vername=" . intval($ver) . " AND VPNo IS NOT NULL AND agcpy=" . intval($quan) . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $arr = array();
        while ($row = $result_all->fetch_assoc()) {
            array_push($arr, $row["VPNo"]);
        }
    } else {
        echo "no_range";
    }

    $a_num = sizeof($arr);
    $d = 0;
    for ($l = 0; $l < $a_num; $l++) {
        if ($d == 0) {
            $d = $arr[$l];
        } else if ($l = $a_num - 1) {
            $d = $d . "-" . $arr[$l];
        }
    }
    return $d;
    // $conn_all->close();
}

function id_cour_description($a)
{
    global $conn_all;
    $sql_all = "SELECT courier_description FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["courier_description"];
    }
    // $conn_all->close();

}

function id_cour_name($a)
{
    global $conn_all;
    $sql_all = "SELECT courier_name FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["courier_name"];
    }
    // // $conn_all->close();

}

function id_dist($a)
{
    global $conn_all;
    $id = intval($a);
    $sql_all = "SELECT dist FROM tblMem  WHERE ID_EN=$id ";
    $result_all = $conn_all->query($sql_all);
    $row = $result_all->fetch_assoc();
    return $row["dist"];
}

function id_ps($a)
{
    global $conn_all;
    $id = intval($a);
    $sql_all = "SELECT ps FROM tblMem  where ID_EN=" . $id . "";
    $result_all = $conn_all->query($sql_all);
    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["ps"];
    }
    // $conn_all->close();
}

function id_po($a)
{
    global $conn_all;
    $sql_all = "SELECT po FROM tblMem  where ID_EN=" . $a . "";
    $result_all = $conn_all->query($sql_all);
    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["po"];
    }
    // $conn_all->close();
}

function id_po_bn($a)
{
    global $conn_all;
    $id = intval($a);
    $sql_all = "SELECT po_bn FROM tblMem  where ID_EN=" . $id . "";
    $result_all = $conn_all->query($sql_all);
    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["po_bn"];
    }
    // $conn_all->close();
}

function user_np_id($u, $p)
{
    global $conn_all;
    $u1 = strval($u);
    $p1 = strval($p);
    $sql_all = "SELECT id FROM users  where user_name = '" . $u1 . "' and password='" . $p1 . "'";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["id"];
    } else {
        return "FALSE";
    }
    // $conn_all->close();
}

function user_id_name($i)
{
    global $conn_all;
    // $u1 = strval($u); // what is $u 
    // $p1 = strval($p); // what is $p
    $sql_all = "SELECT u_name FROM users  where id = '" . $i . "'";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["u_name"];
    } else {
        return "No Name";
    }
    // $conn_all->close();
}

function get_user_key($i)
{
    global $conn_all;
    $sql_all = "SELECT user_key FROM users  where id = '" . $i . "'";
    $result_all = $conn_all->query($sql_all);
    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["user_key"];
    } else {
        return "FALSE";
    }
    // $conn_all->close();

}

function set_user_key($i, $k)
{
    global $conn_all;
    $sql_all = "update   users set user_key='$k' where id = '" . $i . "'";
    $conn_all->query($sql_all);
    // $conn_all->close();

}

function dist_en_bn($d)
{
    global $conn_all;
    $di = intval($d);
    $sql_all = "SELECT bn_name FROM districts  where id = '" . $di . "'";
    $result_all = $conn_all->query($sql_all);

    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["bn_name"];
    } else {
        "No District";
    }
    // $conn_all->close();
}

function ps_en_bn($d)
{
    global $conn_all;
    $di = strval($d);
    $sql_all = "SELECT bn_name FROM upazilas  where upazila_name = '" . $di . "'";
    $result_all = $conn_all->query($sql_all);
    if ($result_all) {
        $row = $result_all->fetch_assoc();
        return $row["bn_name"];
    } else {
        "No Upazila";
    }
    // $conn_all->close();
}

function number_en_bn($d)
{
    // global $conn_all;
    $di = strval($d);
    $en_num = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $bn_num = ["০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯"];
    $new_num = str_replace($en_num, $bn_num, $di);
    return $new_num;
}

function get_max_id(){
    global $conn_all;
    $sql_id = "SELECT MAX(ID_EN)as maxid FROM tblMem where ID_EN <10000";
    $result_id = $conn_all->query($sql_id);

    if ($result_id) {
        // output data of each row
        $row = $result_id->fetch_assoc();
        $GLOBALS['maxid']= $row["maxid"]+1;
        
    } else {
        echo "0 results";
    }
    // $conn_all->close();
}
?>