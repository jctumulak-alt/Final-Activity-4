<form method="post">
    Enter traffic light color (red, yellow, green): 
    <input type="text" name="color">
    <input type="submit" value="Check Action">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = strtolower($_POST["color"]);

    switch ($color) {
        case "red":
            echo "Stop";
            break;

        case "yellow":
            echo "Slow Down";
            break;

        case "green":
            echo "Go";
            break;

        default:
            echo "Invalid color. Please enter red, yellow, or green.";
    }
}
?>