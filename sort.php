<?php
$list = array(8, 5, 3, 6, 1, 9, 2, 7, 10, 4);

for($i = 0; $i < count($list); $i++){
    $min = $i;
    for($j = $i + 1; $j < count($list); $j++){
        if($list[$j] < $list[$min]){
            $min = $j;
        }
    }
    $w = $list[$i];
    $list[$i] = $list[$min];
    $list[$min] = $w;
    $str = implode(',',$list);
    print($str . "\n");
}
?>