<?php
    $name="Milo";
    $price=12.5;
    $qty=12;

    $cost=$price*$qty;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <h1>
        Product name is <?php echo $name; ?>
    </h1>
    <h1>
        Total cost is <?php echo $cost ?>
    </h1>
</body>
</html>