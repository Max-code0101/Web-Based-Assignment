<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = $_POST['color'];
    $storage = $_POST['storage'];
    $price = $_POST['price'];

    // Simulate adding to cart (you can store this in a session or database)
    session_start();
    $_SESSION['cart'] = [
        'product' => 'iPhone 16',
        'color' => $color,
        'storage' => $storage,
        'price' => $price
    ];

    // Redirect to a confirmation page or back to the product page
    header('Location: cart_confirmation.php');
    exit();
}
?>