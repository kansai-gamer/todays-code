<?php
$list = array(8, 5, 3, 6, 1, 9, 2, 7, 10, 4);
$list_count = count($list);

for($i = 0; $i < $list_count; $i++){
    for($j = 1; $j < $list_count; $j++){
        if($list[$j-1] > $list[$j]){
            $tmp  = $list[$j-1];
            $list[$j-1] = $list[$j];
            $list[$j] = $tmp;
        }
    }
}
var_dump($list);
?>