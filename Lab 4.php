<form method="post">
    Enter a number: 
    <input type="number" name="num">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];

    if ($num % 2 == 0) {
        echo "Even number";
    } else {
        echo "Odd number";
    }
}
?>