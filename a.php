<?php

 
  $max_val= $_POST["max_val"];
 



for($i=0;$i<=$max_val;$i++){

    echo $_POST["name".$i."1"];
    echo $_POST["name".$i."2"];
    echo $_POST["name".$i."3"];

}

?>