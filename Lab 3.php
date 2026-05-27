<form method="post">
    Enter your grade: 
    <input type="number" name="grade">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade = $_POST["grade"];

    if ($grade >= 90 && $grade <= 100) {
        echo "Excellent";
    } elseif ($grade >= 80 && $grade <= 89) {
        echo "Good";
    } elseif ($grade >= 70 && $grade <= 79) {
        echo "Average";
    } else {
        echo "Failed";
    }
}
?>