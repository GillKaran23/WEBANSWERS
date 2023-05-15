<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foreach</title>
</head>
<body>
    <?php
    $names = array("Karan", "Karam", "Joban", "Himanshu");
    foreach ($names as $x) {
        echo "Name:" . $x;
        echo "<br>";
    }
    ?>
</body>
</html>