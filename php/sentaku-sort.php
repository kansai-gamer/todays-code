<?php
$nums = [3, 9, 6, 1, 2];
$count = count($nums);
$roop = 0;


while($roop < $count){

    $min = $nums[$roop];
    for($i = $roop; $i < $count; $i++) {
        if($min > $nums[$i]){
            $min = $nums[$i];
            $tmp = $nums[$roop];
            $nums[$i] = $tmp;
            $nums[$roop] = $min;
        }
    }
    $roop++;
}

var_dump($nums)

?>