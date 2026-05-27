<form method="post">
    Enter letter grade (A, B, C, D, F): 
    <input type="text" name="grade">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $grade = strtoupper($_POST["grade"]);

    switch ($grade) {
        case "A":
            echo "Excellent";
            break;
        case "B":
            echo "Good";
            break;
        case "C":
            echo "Average";
            break;
        case "D":
            echo "Poor";
            break;
        case "F":
            echo "Failed";
            break;
        default:
            echo "Invalid grade. Please enter A, B, C, D, or F.";
    }
}
?>