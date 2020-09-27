<?php
echo "入力待機中:";
$nums = array_map('intval', explode(',', trim(fgets(STDIN))));
// メモ intval 数値データへ変換 explode 文字を分ける(今回はカンマ区切り)

$duplicate_del = array_unique($nums);
//重複削除

sort($duplicate_del);
//数値順に並び替え

echo $duplicate_del[2] . "\n";

// var_dump($duplicate_del);
//デバッグ用
?>