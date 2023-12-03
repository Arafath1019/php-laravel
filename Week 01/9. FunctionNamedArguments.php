<?php

function caculateTotalCost(float $price, int $quantity, float $discount = 0): float {
    $total = $price + $quantity;
    $total -= $discount;
    return $total;
}

echo caculateTotalCost($price= 10.5, $quantity= 3, $discount= 2.5);