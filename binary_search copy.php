<?php
$nums = [10,40,50,20,90,10,50,34,11];
$hit = trim(fgets(STDIN));
sort($nums);
$i = 0;
$r = 0;
$l = 0;
// デバック用
// print_r($nums);
$r = count($nums) - 1;
while($l <= $r){
    $i = floor($r + $l / 2);
    if($hit == $nums[$i]){
        echo "Found " . $i . "th\n";
    break;
    }elseif($hit < $nums[$i]){
        $r = $i - 1;
    }else{
        $l = $i + 1;
    }
}

?>