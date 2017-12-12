<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$tabemono = htmlspecialchars($_POST['tabemono'], ENT_QUOTES);

echo "お名前は".$name."で、好きな食べ物は".$tabemono."ですね。";
?>