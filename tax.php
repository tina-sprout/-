<php?

//taxに1.08(消費税)を代入
define('tax',1.08);

//入力a
$stdin = trim(fgets(STDIN));  
var_dump($stdin);

//pretax_priceに入力された数値と税を掛けた値を代入
$pretax_price = $stdin * tax;

//円
$unit = "円";

//出力
echo $stdin.$unit."の税込みは".floor($pretax_price).$unit."です";

?>
