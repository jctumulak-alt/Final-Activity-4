<form method="post">
    Enter purchase amount: 
    <input type="number" name="amount">
    <input type="submit" value="Calculate Discount">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];

    if ($amount >= 1000) {
        $discount = 0.20;
        echo "20% discount applied<br>";
    } elseif ($amount >= 500) {
        $discount = 0.10;
        echo "10% discount applied<br>";
    } else {
        $discount = 0;
        echo "No discount applied<br>";
    }

    $finalPrice = $amount - ($amount * $discount);
    echo "Final price: " . $finalPrice;
}
?>