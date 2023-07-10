<?php

$quantity1 = 70;
$quantity2 = 100;
$price1 = 35;
$price2 = 30;

$unitPrice1 = $price1 / $quantity1;
$unitPrice2 = $price2 / $quantity2;

echo "Quantity of Deal 1: $quantity1<br>";
echo "Price of Deal 1: $price1<br>";
echo "Unit Price of Deal 1: $unitPrice1<br><br>";

echo "Quantity of Deal 2: $quantity2<br>";
echo "Price of Deal 2: $price2<br>";
echo "Unit Price of Deal 2: $unitPrice2<br><br>";

if ($unitPrice1 < $unitPrice2) {
    echo "Deal 1 is the best deal.";
} elseif ($unitPrice2 < $unitPrice1) {
    echo "Deal 2 is the best deal.";
} else {
    echo "Both deals have the same unit price.";
}

?>
