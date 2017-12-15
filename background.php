<?php
$color1 = "silver";
$color2 = "white";
 
for ($i = 0; $i < 10; $i++) {
  $color = ($i % 2) == 1 ? $color1 : $color2;
  echo <<<EOM
<div style="background-color:{$color};">テスト</div>
EOM;
}
?>