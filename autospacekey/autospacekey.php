<?php
$usertypestr = $_GET["usertypestr"];
$arr1 = preg_split("//u", $usertypestr);

$count = count($arr1);

for($i = 0; $i < $count; $i++){
    echo $arr1[$i] . "　";
}
echo "\n";

#このサイトがなかったらおそらく日本語対応は実現しなかったと思います。感謝です
#http://var.blog.jp/archives/51037242.html
?>