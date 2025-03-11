<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPad Pro M4</title>
    <link rel="stylesheet" href="product.css">
</head>
<body>
<header>
    <!-- Logo and Back Button -->
    <div class="header-left">
        <div class="logo">
            <img src="Gallery/aeple logo.png" alt="Company Logo" height="40">
            <a href="index.php" class="back-button">&#8592; Back to Homepage</a>
        </div>
    </div>

    <!-- Page Title -->
    <h1>iPad Pro M4</h1>

    <!-- Search Bar and Cart Container -->
    <div class="header-right">
        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" placeholder="Search products..." class="search-bar">
            <button class="search-button">&#128269;</button>
        </div>

        <!-- Cart Container -->
        <div class="cart-container">
            <a href="cart.php" class="cart-link">
                <div class="cart-icon">
                    🛒
                    <span class="cart-count">0</span>
                </div>
            </a>
            <!-- Cart Dropdown Content -->
            <div class="cart-dropdown">
                <div class="cart-items">
                    <p class="empty-cart-message">Your cart is empty.</p>
                </div>
                <div class="cart-total">Total: RM 0.00</div>
            </div>
        </div>
    </div>
</header>

    <main>
        <section class="product-details">
            <!-- Video on the Left -->
            <div class="video-container">
                <video controls autoplay muted loop>
                    <source src="Video/ipad video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="Gallery/ipaddetails.jpg" height="750" alt="iPad Pro M4 Details">
                <img src="Gallery/ipadcolours.jpg" height="750" alt="iPad Pro M4 Colors">
                <img src="Gallery/ipadbox.jpg" height="750" alt="iPad Pro M4 Box">
            </div>

            <!-- Content on the Right -->
            <div class="content-container">
                <!-- Image Slider -->
                <div class="slider">
                    <div class="slides">
                        <img src="Gallery/ipadwhite.jpg" alt="iPad Pro M4 White" class="slide">
                        <img src="Gallery/ipadblack.jpg" alt="iPad Pro M4 Black" class="slide">
                    </div>
                    <!-- Slider Controls -->
                    <button class="slider-button prev">&#10094;</button>
                    <button class="slider-button next">&#10095;</button>
                </div>

                <!-- Product Info and Buttons -->
                <div class="product-info">
                    <h2>iPad Pro M4</h2>
                    <p class="price">Starting at RM5,899.00</p>

                    <div class="color-options">
                        <h3>Choose Color:</h3>
                        <button class="color-option" data-color="white" data-image="Gallery/ipadwhite.jpg"></button>
                        <button class="color-option" data-color="black" data-image="Gallery/ipadblack.jpg"></button>
                    </div>

                    <div class="storage-options">
                        <h3>Choose Storage:</h3>
                        <button class="storage-option" data-storage="256GB" data-price="5899">256GB</button>
                        <button class="storage-option" data-storage="512GB" data-price="6799">512GB</button>
                        <button class="storage-option" data-storage="1TB" data-price="8599">1TB</button>
                    </div>

                    <!-- Product Description -->
                    <div class="product-description">
                        <h3>Overview</h3>
                        <p>The new iPad Pro is impossibly thin, featuring outrageous performance with the Apple M4 chip, a breakthrough Ultra Retina XDR display and superfast Wi-Fi 6E. Along with Apple Pencil Pro and Magic Keyboard, it brings endless versatility, creativity and productivity to your fingertips.</p>
                        <h3>Features</h3>
                        <div id="description-short">
                            <ul>
                                <li><strong>13-INCH ULTRA RETINA XDR DISPLAY</strong> — Ultra Retina XDR delivers extreme brightness and contrast as well as exceptional colour accuracy...</li>
                            </ul>
                            <button id="view-more-btn">View more</button>
                        </div>
                        <div id="description-full" style="display: none;">
                            <ul>
                            <li><strong>13-INCH ULTRA RETINA XDR DISPLAY</strong> — Ultra Retina XDR delivers extreme brightness and contrast as well as exceptional colour accuracy, and features advanced technologies like ProMotion, P3 wide colour and True Tone. Plus a nano-texture glass option is available in 1TB and 2TB configurations.</li>
                            <li><strong>PERFORMANCE AND STORAGE</strong> — Up to 10-core CPU in the M4 chip delivers powerful performance, while the 10‑core GPU provides blazing-fast graphics. And with all-day battery life, you can do everything you can imagine on iPad Pro. Up to 2TB of storage means you can store everything from apps to large files like 4K video.</li>
                            <li><strong>IPADOS + APPS</strong> — iPadOS makes iPad more productive, intuitive and versatile. With iPadOS, run multiple apps at once, use Apple Pencil to write in any text field with Scribble, and edit and share photos. Stage Manager makes multitasking easy with resizeable, overlapping apps and external display support. iPad Pro comes with essential apps like Safari, Messages and Keynote, with over a million more apps available on the App Store.</li>
                            <li><strong>APPLE PENCIL AND MAGIC KEYBOARD FOR IPAD PRO</strong> — Apple Pencil Pro transforms iPad Pro into an immersive drawing canvas and note‑taking device. Apple Pencil (USB-C) is also compatible with iPad Pro. Magic Keyboard for iPad Pro features a thin and light design, great typing experience and a built‑in glass trackpad with haptic feedback, while doubling as a protective cover for iPad. Accessories sold separately.</li>
                            <li><strong>ADVANCED CAMERAS</strong> — iPad Pro features a landscape 12MP Ultra Wide front camera that supports Centre Stage for videoconferencing or epic Portrait mode selfies. The 12MP Wide back camera with adaptive True Tone flash is great for capturing photos or 4K video with ProRes support. Four studio-quality microphones and a four-speaker audio system provide rich audio. And AR experiences are enhanced with the LiDAR scanner to capture a depth map of any space.</li>
                            <li><strong>CONNECTIVITY</strong> — Wi-Fi 6E gives you fast wireless connections. Work from almost anywhere with quick transfers of photos, documents and large video files. Connect to external displays, drives and more using the USB-C connector with support for Thunderbolt / USB 4.</li>
                            <li><strong>UNLOCK AND PAY WITH FACE ID</strong> — Unlock your iPad Pro, securely authenticate purchases, sign in to apps, and more — all with just a glance.</li>
                        </ul>
                            <button id="view-less-btn">View less</button>
                        </div>

                        <h3>In The Box</h3>
                        <p>13-inch iPad Pro<br>USB-C Charge Cable</p>

                        <!-- Warranty Section -->
                        <div class="warranty-section">
                            <h3>Warranty</h3>
                            <p>Manufacturer's Warranty - Labor Apple One (1) Year Limited Warranty</p>
                            <p>Manufacturer's Warranty - Parts Apple One (1) Year Limited Warranty</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sticky Price and Add to Cart Section -->
        <div class="sticky-price-cart">
            <!-- Price and Financing Info (Middle) -->
            <div class="price-financing">
                <div class="price-display">
                    <span id="sticky-price">RM 5,899.00</span>
                </div>
                <div class="financing-info">
                    <p>or <strong>RM163.86/month</strong> for 36 months*</p>
                </div>
            </div>

            <!-- Add to Cart Button (Right) -->
            <button class="add-to-cart" disabled>Add to Cart</button>
        </div>
    </main>

    <script src="ipad.js"></script>
</body>
</html>