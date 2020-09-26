<?php
$nums = [54, 58, 60, 62, 65, 73, 75];
$hit = trim(fgets(STDIN));

sort($nums);

$hantei = 0;
$i = 0;
$r = 0;
$l = 0;

print_r($nums);

$r = count($nums) - 1;

while($l <= $r){
    $i = floor(($r + $l) / 2);
    if($hit == $nums[$i]){
        $i = $i + 1;
        $hantei = true;
        break;
    }elseif($hit < $nums[$i]){
        $r = $i - 1;
    }else{
        $l = $i + 1;
    }
}

if($hantei == true){
    echo "Found " . $i . "th\n";
}else{
    echo "Not found" . $i . "th\n";
}
?>