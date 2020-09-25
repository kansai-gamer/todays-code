<?php
$nums = [10,40,50,20,90,10,50,34,11];
$hit = 11;
sort($nums);
#ここから工夫
$cyuu = floor(count($nums) / 2);
for($i = 0; $i < count($nums); $i++){
    if($nums[$cyuu] == $hit){
        echo "Found" . $cyuu;
    }elseif()
}

?>
