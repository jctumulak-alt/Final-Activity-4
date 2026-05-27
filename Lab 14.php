<form method="post">
    Select a menu option:<br><br>

    <select name="choice">
        <option value="1">1 = Add</option>
        <option value="2">2 = Edit</option>
        <option value="3">3 = Delete</option>
    </select>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice = $_POST["choice"];

    switch ($choice) {
        case "1":
            echo "You selected: Add";
            break;
        case "2":
            echo "You selected: Edit";
            break;
        case "3":
            echo "You selected: Delete";
            break;
        default:
            echo "Invalid selection";
    }
}
?>