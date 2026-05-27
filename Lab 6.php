<form method="post">
    Enter password: 
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputPassword = $_POST["password"];
    $correctPassword = "admin123";

    if ($inputPassword === $correctPassword) {
        echo "Access Granted";
    } else {
        echo "Access Denied";
    }
}
?>