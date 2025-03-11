<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <a href="index.php" class="back-button">Back to Homepage</a>
        <h1>Shopping Cart</h1>
    </header>

    <main class="cart-page">
        <div class="cart-summary">
            <h2 class="cart-items-count">0 items in your cart</h2>
            <div class="cart-items-list">
                <!-- Cart items will be dynamically inserted here -->
            </div>
            <div class="cart-total-page">
                Total: RM 0.00
            </div>

            <div class="cart-empty">
                <img src="Gallery/cartEmpty.png" alt="Empty Cart" class="cart-empty-image">
                <p>No items in your cart</p>
                <p>Take a look at and add your favorites</p>
                <button class="go-shopping-button">Go shopping</button>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>