<?php
$nums = [10,40,50,20,90,10,50,34,11];
$hit = 10;
sort($nums);
$r = 0;
$l = 0;
#↓が変動するように作る
$cyuu = floor(count($nums) / 2);
for($i = 0; $i < $cyuu; $i++){
    if($nums[$i] == $hit){
        echo "Found " . $cyuu . "th\n";
    }elseif($hit < $nums[$i]){
        $cyuu = $cyuu / 2;
    }elseif($hit > $nums[$i]){
        $cyuu = $cyuu + 2;
    }else{
        echo "Not Found" . "\n";
        echo $nums[$i];
    }
}

?>