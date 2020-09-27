<?php
$nums = [54, 58, 60, 62, 65, 73, 75];
echo "入力待機:";
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
        $hantei = true;
        break;
    }elseif($hit < $nums[$i]){
        $r = $i - 1;
    }else{
        $l = $i + 1;
    }
}

#こうする以外にNot foundを出力させる方法が分かりませんでした。
if($hantei == true){
    $i = $i + 1;
    echo "Found " . $i . "th\n";
}else{
    echo "Not found\n";
}
?>