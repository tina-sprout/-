<?php

$a = 10;

switch($a) {
    //0~4
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        print '$aの値は0~4の間の値です';
        break;
    //5~9
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        print '$aの値は5~9の間の値です';
        break;
    //それ以外
    default:
        print'$aの値は0~9以外の値です';
        break;

?>
