<?php include 'Layout/header.php';?>
<?php include 'session_check.php';?>

<script>
    function upazilaFunction(str) {
        if (str == "") {
            document.getElementById("upazila").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
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

    function postofficeFunction(str) {
    if (str == "") {
            document.getElementById("postoffice").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
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
<body>
<?php $GLOBALS["id_en"] = $_POST["id_en"];?>
<?php
$sql_id = "SELECT  Name,Des,Org,vill,po,po_bn,ps,dist,mob,phone,email,courier_name,courier_description,comment FROM tblMem where ID_EN ='" . $GLOBALS["id_en"] . "'";
$result_id = $conn_all->query($sql_id);
if ($result_id) {
    $row = $result_id->fetch_assoc();
    // debug_to_console($row);
    $GLOBALS['Name'] = $row["Name"];
    $GLOBALS['Des'] = $row["Des"];
    $GLOBALS['Org'] = $row["Org"];
    $GLOBALS['vill'] = $row["vill"];
    $GLOBALS['po'] = $row["po"];
    $GLOBALS['po_bn'] = $row["po_bn"];
    $GLOBALS['ps'] = $row["ps"];
    $GLOBALS['dist'] = $row["dist"];
    $GLOBALS['phone'] = $row["phone"];
    $GLOBALS['mob'] = $row["mob"];
    $GLOBALS['email'] = $row["email"];
    $GLOBALS['courier_name'] = $row["courier_name"];
    $GLOBALS['courier_description'] = $row["courier_description"];
    $GLOBALS['comment'] = $row["comment"];
} else {
    echo "0 results";
}
?>
        <div class="modal-body">
        <div class="col-sm-8 contact-form"> <!-- div da direita -->
        <!--target='iframe_ag_new_update'  -->
            <form id="contact" method="post" class="form" role="form"  action ="hks_agent_update_data.php" >
                <div class="row">
                    <h4><?php echo $GLOBALS['Name']; ?> (<?php echo $GLOBALS['id_en']; ?>)</h4>
                    <div class="col-xs-6 col-md-6 form-group">
                        <input class="form-control" id="agent_number" name="ag_number" value="<?php echo $GLOBALS['id_en']; ?>" type="hidden" autofocus />
                        <input class="form-control" id="trans_id" name="trans_id" value=" " type="hidden" autofocus />
                        <input class="form-control" id="inputCNPJ" name="maxidx_tblmain" value="" type="hidden" autofocus />
                    </div>
                    <div class="col-xs-4 col-md-12 form-group">
                        <input class="form-control" id="ag_name_mod1" name="ag_name"  value="<?php echo $GLOBALS['Name']; ?>" type="text" />
                    </div>
                    <div class="col-xs-4 col-md-12 form-group">
                        <input class="form-control" id="ag_addr" name="ag_addr" value="<?php echo $GLOBALS['vill']; ?>"placeholder="Address" type="text" />
                    </div>
                </div>

                <div class="row">
				    <div class="col form-group">
                        <select   class="form-control"id="id_district" name="ag_dist" onchange="upazilaFunction(this.value);postofficeFunction(this.value)"  >
                            <option><?php echo $GLOBALS['dist']; ?></option>
                            <?php
                                $sql = "SELECT id, district_name FROM districts order by district_name asc";
                                $result = $conn_all->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value =" . $row['id'] . $row['district_name'] . ">" . dist_en_bn($row['id'] . $row['district_name']) . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
					<div class="col  form-group">
                        <select class="form-control"id="upazila" name="ag_ps"onchange="upzilaFunction(this.value)"  >
                            <option><?php echo $GLOBALS['ps']; ?><option>
                        </select>
                    </div>
                </div>
                                <div class="row">
                                <div class="col form-group">
                                    <select class="form-control"id="postoffice" name="ag_po" >
                                        <option><?php echo $GLOBALS['po']; ?><option>
    								</select>
                                </div>
                                <div class="col form-group">
									<input class="form-control" id="ag_poffice_bn" name="ag_poffice_bn" placeholder="POST-BANGLA" value="<?php echo $GLOBALS['po_bn']; ?>" type="text" />
								</div>
                            </div>
                                <div class="row form-group">
                                 <div class="col form-group ">
                                    <input class="form-control" id="ag_mobile1" name="ag_mobile1" minlength="11" maxlength="11" size="11" placeholder="Phone 1" value="<?php echo $GLOBALS['mob']; ?>" type="text" required />
                                </div>
								<div class="col form-group ">
                                    <input class="form-control" id="ag_mobile2" name="ag_mobile2" placeholder="Phone 2"  minlength="11" maxlength="11" size="11" value="<?php echo $GLOBALS['phone']; ?>" type="text" />
                                </div>

                                </div>

                                <div class="  form-group">
                                    <input class="form-control" id="ag_email" name="ag_email"placeholder="Email" value="<?php echo $GLOBALS['email']; ?>" type="email" />
                                </div>

                                <div class="row">

                            <div class="col form-group ">
                                    <input class="form-control" id="courier_name" name="courier_name"placeholder="Courier Name" value="<?php echo $GLOBALS['courier_name']; ?>" type="text" />
                                </div>



                                <div class="col form-group ">
                                    <input class="form-control" id="courier_description" name="courier_description"placeholder="Courier Description" value="<?php echo $GLOBALS['courier_description']; ?>" type="text" />
                                </div>
                                </div>
							<div class="row form-group">
								<div class="col form-group">
									<div class="controls form-group">
                                        <textarea
                                            class="form-control"
                                            id="message"
                                            name="message"
                                            rows="3"
                                            cols="35" >
                                            <?php
                                                echo "{$GLOBALS['Name']}, {$GLOBALS['Des']} , {$GLOBALS['Org']} , {$GLOBALS['vill']}, {$GLOBALS['po']} , {$GLOBALS['po']} , {$GLOBALS['dist']}, {$GLOBALS['phone']}, {$GLOBALS['mob']}, {$GLOBALS['email']}";                                        ?>
                                        </textarea>
									</div>
								</div>
								<div class="col-xs-4 col-md-4 form-group">
 									<button
                                        class="btn btn-primary"
                                        type="submit"
                                        data-toggle="modal"
                                        data-target="#myModal"
                                        onclick="submitFunction()"
                                    >
                                        Submit
                                    </button>
								</div>
							</div>
                        </form>
                    </div>
        </div>
<?php include 'Layout/footer.php'; ?>