<form method="post">
    Enter a number:
    <input type="number" name="number">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if ($number > 0) {
        echo "Positive number.";
    } else {
        echo "Negative number.";
    }
}
?>