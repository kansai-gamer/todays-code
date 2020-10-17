<?php
$str = trim(fgets(STDIN));
$bunrui = explode(",", $str);
sort($bunrui);

print_r($bunrui);
?>