<?php
$nums = [10,40,50,20,90,10,50,34,11];
echo "入力待機";
$hit = trim(fgets(STDIN));
sort($nums);
$low = 0;
$high = count($nums) - 1;
#var_dump($nums);
#ここから工夫
// for($i = 0; $i < count($nums); $i++){
//     $cyuu = floor(count($nums) / 2);
//     if($nums[$cyuu] == $hit){
//         echo "Found" . $cyuu;
//     }elseif()
// }
$flag = false;

while($low <= $high){
    $cyuu = floor($high + $low) / 2;
    if($nums[$cyuu] < $hit){
        $low = $cyuu + 1;
    }elseif($nums[$cyuu] > $hit){
        $high = $cyuu - 1;
    }else{
        print("Found " . $nums[$cyuu] . " " . $cyuu . "th");
        $flag = true;
        break;
    }
}

if($flag == false){
    echo "Not found";
}
?>
