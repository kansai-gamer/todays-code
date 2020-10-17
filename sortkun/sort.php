<?php
$usertypestr = $_GET["usertypestr"];
$bunrui = explode(",", $usertypestr);
sort($bunrui);

for($i = 0; $i < count($bunrui); $i++){
    echo $bunrui[$i] . "<br>";
}
?>