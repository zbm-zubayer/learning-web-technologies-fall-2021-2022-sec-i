<?php 
$amount = 1000;
$vat = 15;
$amountVat = $amount + ($amount * ($vat/100));
echo "Amount including vat = ".$amountVat;
?>