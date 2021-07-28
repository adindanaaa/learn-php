<?php
/** first case */
$product = [
    ["name" => "Lenava", "tqy" => 4, "price" => 1000000],
    ["name" => "Aser", "tqy" => 2, "price" => 1500000],
    ["name" => "Toyiba", "tqy" => 6, "price" => 2000000],
    ["name" => "Doll", "tqy" => 1, "price" => 1200000],
    ["name" => "Susa", "tqy" => 3, "price" => 1700000],
];

/** membuat code untuk menghitung total jumlah yang dibeli */
$total = 0;
for ($i=0; $i < count($product); $i++) {
    $totalEachItem = $product[$i]["tqy"] * $product[$i]["price"];
    $total += $totalEachItem;
}
echo "Total keseluruhannya : $total"


/** second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120
 */ 

/** 
 * fungsi -> void dan non-void
 * void -> fungsi yang tidak mengembalikan value
 * non-void -> fungsi yang mengembalikan value (return)
 
 * analogi -> ketua kelas meminta info tentang saldo
 * fungsi hitungSaldo() -> return saldonya
 
 * analogi -> ketua kelas meminta bendahara untuk narik kas
 * fungsi hitungSaldo()
 */
/** buat fungsi untuk menghitung bilangan faktorial */

function faktorial($number)
{
	$result = 1;
	for ($i=$number; $i >= 1 ; $i--) {
       $result = $result * $i;
	}
	return $result;
}

echo "Faktorial of number 5 is ". faktorial(5);



?>