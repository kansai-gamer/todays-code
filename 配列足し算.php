<?php
#今日の日記
#[$]をつけ忘れるが実行前に気がつく
#演算子の値を間違える（俺あるある、というか覚えろよ・・・）
#count変数使えば出来るやつぽくね？とか思ったり
$total = 0;
$nums = [100, 300, 700, 800];
$count = count($nums);
echo "変数内の数 ";
for($i = 0; $i < $count; $i++){
    $total = $total + $nums[$i];
    echo $nums[$i] . " ";
}
echo "\n";
echo "計算結果 " . $total . "\n";
?>