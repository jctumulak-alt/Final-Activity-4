<form method="post">
    Enter first number: 
    <input type="number" name="num1"><br><br>

    Enter second number: 
    <input type="number" name="num2"><br><br>

    Enter operator (+, -, *, /): 
    <input type="text" name="operator"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["operator"];

    switch ($op) {
        case "+":
            echo "Result: " . ($num1 + $num2);
            break;

        case "-":
            echo "Result: " . ($num1 - $num2);
            break;

        case "*":
            echo "Result: " . ($num1 * $num2);
            break;

        case "/":
            if ($num2 == 0) {
                echo "Cannot divide by zero";
            } else {
                echo "Result: " . ($num1 / $num2);
            }
            break;

        default:
            echo "Invalid operator";
    }
}
?>