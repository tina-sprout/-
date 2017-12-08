<php?

//taxに1.08(消費税)を代入
define('tax',1.08);

//priceに100~8000の値を代入

$stdin = trim(fgets(STDIN));  
var_dump($stdin);

$price =

//pretax_priceにrand*taxの結果を代入
$pretax_price = $price * tax;

$unit = "円";

//出力
echo $stdin.$unit."の税込みは".floor($pretax_price).$unit."です";

?>