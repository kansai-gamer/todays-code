<?php
$str = trim(fgets(STDIN));
print_r(explode(",", $str));
sort($str);

print_r($str);
?>