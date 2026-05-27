<form method="post">
    Enter age: 
    <input type="number" name="age"><br><br>

    Enter citizenship: 
    <input type="text" name="citizen"><br><br>

    <input type="submit" value="Check Eligibility">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    $citizen = $_POST["citizen"];

    if ($age >= 18) {
        if (strtolower($citizen) == "filipino") {
            echo "Eligible to vote";
        } else {
            echo "Not eligible (Not a Filipino citizen)";
        }
    } else {
        echo "Not eligible (Underage)";
    }
}
?>