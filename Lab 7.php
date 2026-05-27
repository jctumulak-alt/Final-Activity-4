<form method="post">
    Enter a year: 
    <input type="number" name="year">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];

    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "Leap Year";
    } else {
        echo "Not a Leap Year";
    }
}
?>