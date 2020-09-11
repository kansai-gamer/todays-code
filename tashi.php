<?php
#今日の日記
#いつも演算子を間違えるんだよなぁ
$nums = array(60, 90, 50, 30, 20);
$max = $nums[0];

for($i = 0; $i < count($nums); $i++){
    if($max < $nums[$i]){
        $max = $nums[$i];
    }
}
echo "最大値" . $max . "\n";
?>