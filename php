<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Background Color Change</title>
</head>
<body bgcolor="<?php
    if (isset($_POST['btn'])) {
        $col = $_POST['t1'];
        if (isset($col)) {
            echo $p = $col;
        } else {
            echo $p = "#ffffff"; // Default color (white)
        }
    }
?>">
    <form action="" method="post">
        <strong>Choose Color to Change Background:</strong>
        <select name="t1">
            <option value="">Choose Color</option>
            <option value="#000000">Black</option>
            <option value="#0000ff">Blue</option>
            <!-- Add more color options here -->
        </select>
        <br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>
</html>
