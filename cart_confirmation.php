<?php
session_start();
if (!isset($_SESSION['cart'])) {
    header('Location: index2.php');
    exit();
}

$cart = $_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <a href="index.php" class="back-button">Back to Homepage</a>
        <h1>Cart Confirmation</h1>
    </header>

    <main>
        <section class="cart-details">
            <h2>Item Added to Cart</h2>
            <p>Product: <?php echo $cart['product']; ?></p>
            <p>Color: <?php echo $cart['color']; ?></p>
            <p>Storage: <?php echo $cart['storage']; ?></p>
            <p>Price: $<?php echo $cart['price']; ?></p>
        </section>
    </main>
</body>
</html>