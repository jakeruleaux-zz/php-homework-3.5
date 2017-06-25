<?php
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"];
    $solution = $first_number + $second_number;
?>
<!DOCTYPE html>
<html>
<head>
    <title>ship cost</title>
</head>
<body>
    <h1>This is gonna cost ya...</h1>
    <p>its heavy <?php echo $first_number; ?> and <?php echo $second_number; ?> its going long. give me this $ </p>
    <p><?php echo $solution; ?></p>
</body>
</html>
