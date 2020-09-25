<?php
$nums = [10,40,50,20,90,10,50,34,11];
$hit = trim(fgets(STDIN));
sort($nums);
$r = 0;
$l = 0;
print_r($nums);
#↓が変動するように作る
$cyuu = floor(count($nums) / 2);
for($i = 0; $i < $cyuu; $i++){
    if($nums[$i] == $hit){
        echo "Found " . $cyuu . "th\n";
        echo $i . "\n";
    }elseif($hit < $nums[$i]){
        $r = $r + 1;
    }elseif($hit > $nums[$i]){
        $l = $l + 2;
    }else{
        echo "Not Found" . "\n";
        echo $nums[$i];
    }
}

?>