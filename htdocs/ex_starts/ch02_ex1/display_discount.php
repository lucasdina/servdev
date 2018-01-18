<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <?php
    $desc =  $_POST['product_description'];
    $price =  $_POST['list_price'];
    $discount =  $_POST['discount_percent'];
    $amtOff = ($discount/100)*$price;
    $amtTtl = ($price - $amtOff);

    ?>
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $desc; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount.'%'; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $amtOff; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $amtTtl; ?></span><br>
    </main>
</body>
</html>