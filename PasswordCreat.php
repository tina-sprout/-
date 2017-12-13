<?php

$num = 8; //文字数
$ar1 = range('a','z'); //小文字を配列
$ar2 = range('A','Z'); //大文字を配列に
$ar3 = range(0,9); //数字を配列に
$ar4 = range('#','%','&');//記号の配列
$ar_all = array_merge($ar1,$ar2,$ar3,$ar4); //全て結合

shuffle($ar_all); //ランダムにシャッフル

echo substr(implode($ar_all),0,$num); //先頭の8文字

?>