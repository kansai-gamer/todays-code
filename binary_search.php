<?php
$nums = [10,40,50,20,90,10,50,34,11];
$hit = 11;
sort($nums);
#ここから工夫
$r = 0;
$l = 0;
$cyuu = floor(count($nums) / 2);
for($i = 0; $i < $cyuu; $i++){
    if($nums[$i] == $hit){
        echo "Found " . $cyuu . "th";
    }elseif($hit < $nums[$i]){
        $cyuu = $cyuu / 2;
    }elseif($hit > $nums[$i]){
        $cyuu = $cyuu + 1;
    }else{
        echo "Not Found" . "\n";
        echo $nums[$i];
    }
}

?>