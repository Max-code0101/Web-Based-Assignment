<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 16</title>
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
    <h1>iPhone 16</h1>

    <!-- Search Bar and Cart Container -->
    <div class="header-right">
        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" placeholder="Search products..." class="search-bar">
            <button class="search-button">&#128269;</button>
        </div>

        <!-- Cart Container -->
        <div class="cart-container">
            <div class="cart-icon">
                🛒
                <span class="cart-count">0</span>
            </div>
            <!-- Cart Dropdown Content -->
            <div class="cart-dropdown">
                <div class="cart-items"></div>
                <div class="cart-total">Total: RM 0.00</div>
            </div>
        </div>
    </header>
</header>

    <main>
        <section class="product-details">
            <!-- Video on the Left -->
            <div class="video-container">
                <video controls autoplay muted loop>
                    <source src="Video/iphone16.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <img src="Gallery/details16.jpg" height="750" alt="iPhone 16 Details">
                <img src="Gallery/iphone16colour.jpg" height="750" alt="iPhone 16 Colors">
                <img src="Gallery/iphone16box.jpg" height="750" alt="iPhone 16 Box">
            </div>

            <!-- Content on the Right -->
            <div class="content-container">
                <!-- Image Slider -->
                <div class="slider">
                    <div class="slides">
                        <img src="Gallery/iphone16_blue.jpg" alt="iPhone 16 Blue" class="slide">
                        <img src="Gallery/iphone16_white.jpg" alt="iPhone 16 White" class="slide">
                        <img src="Gallery/iphone16_black.jpg" alt="iPhone 16 Black" class="slide">
                    </div>
                    <!-- Slider Controls -->
                    <button class="slider-button prev">&#10094;</button>
                    <button class="slider-button next">&#10095;</button>
                </div>

                <!-- Product Info and Buttons -->
                <div class="product-info">
                    <h2>iPhone 16</h2>
                    <p class="price">Starting at RM 3,999.00</p>

                    <div class="color-options">
                        <h3>Choose Color:</h3>
                        <button class="color-option" data-color="blue" data-image="Gallery/iphone16_blue.jpg"></button>
                        <button class="color-option" data-color="white" data-image="Gallery/iphone16_white.jpg"></button>
                        <button class="color-option" data-color="black" data-image="Gallery/iphone16_black.jpg"></button>
                    </div>

                    <div class="storage-options">
                        <h3>Choose Storage:</h3>
                        <button class="storage-option" data-storage="128GB" data-price="3999">128GB</button>
                        <button class="storage-option" data-storage="256GB" data-price="4499">256GB</button>
                        <button class="storage-option" data-storage="512GB" data-price="5499">512GB</button>
                    </div>

                    <!-- Product Description -->
                    <div class="product-description">
                        <h3>Overview</h3>
                        <p>Introducing Camera Control. 48MP Fusion camera. Five vibrant colours. And the A18 chip.</p>

                        <h3>Features</h3>
                        <div id="description-short">
                            <ul>
                                <li><strong>TAKE TOTAL CAMERA CONTROL</strong> — Camera Control gives you an easier way to quickly access camera tools, like zoom or depth of...</li>
                            </ul>
                            <button id="view-more-btn">View more</button>
                        </div>
                        <div id="description-full" style="display: none;">
                            <ul>
                                <li><strong>TAKE TOTAL CAMERA CONTROL</strong> — Camera Control gives you an easier way to quickly access camera tools, like zoom or depth of field, so you can take the perfect shot in record time.</li>
                                <li><strong>GET FURTHER AND CLOSER</strong> — The improved Ultra Wide camera with autofocus lets you take incredibly detailed macro photos and videos. Use the 48MP Fusion camera for stunning high-resolution images and zoom in with the 2x optical-quality Telephoto.</li>
                                <li><strong>PHOTOGRAPHIC STYLES</strong> — The latest-generation Photographic Styles give you greater creative flexibility, so you can make every photo even more you. And you can reverse any of those styles anytime you want.</li>
                                <li><strong>SUPER-SMART A18 CHIP</strong> — A18 jumps two generations ahead of the A16 Bionic chip in iPhone 15. It enables advanced photo and video features, and supports console-level gaming, with exceptional power efficiency.</li>
                                <li><strong>LONGER BATTERY LIFE</strong> — iPhone 16 works together with the A18 chip to deliver a big boost in battery life with up to 22 hours video playback.¹ Charge via USB-C or snap on a MagSafe charger for faster wireless charging.²</li>
                                <li><strong>DESIGNED TO LAST</strong> — iPhone 16 has a sturdy, aerospace-grade aluminium design with a 6.1-inch Super Retina XDR display.³ It’s remarkably durable with the latest-generation Ceramic Shield material that’s 2x tougher than any smartphone glass.</li>
                                <li><strong>MEET THE ACTION BUTTON</strong> — A fast track to your favourite feature. Just press and hold to launch the action you want — the torch, a voice memo, Silent mode and more.</li>
                                <li><strong>CUSTOMISE YOUR IPHONE</strong> — With iOS 18, you can tint your Home Screen icons with any colour. Find your favourite shots faster in the redesigned Photos app. And add playful, animated effects to any word, phrase or emoji in iMessage.⁴</li>
                                <li><strong>VITAL SAFETY FEATURES</strong> — With Crash Detection, iPhone can detect a severe car crash and call for help if you can’t.⁵</li>
                            </ul>
                            <button id="view-less-btn">View less</button>
                        </div>

                        <h3>In The Box</h3>
                        <p>iPhone<br>USB-C Charge Cable</p>

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
                    <span id="sticky-price">RM 3,999.00</span>
                </div>
                <div class="financing-info">
                    <p>or <strong>RM 166.63/month</strong> for 24 months*</p>
                </div>
            </div>

            <!-- Add to Cart Button (Right) -->
            <button class="add-to-cart" disabled>Add to Cart</button>
        </div>

        <div class="cart-container">
            <a href="cart.php" class="cart-link">
                <div class="cart-icon">
                    🛒
                    <span class="cart-count">0</span>
                </div>
            </a>
            <!-- Cart Dropdown Content -->
            <div class="cart-dropdown">
                <div class="cart-items"></div><!-- Cart items will be dynamically inserted here -->
                    <div>
                     <div class="cart-total">Total: RM 0.00</div>

                     <div class="cart-empty">
                     <img src="Gallery/cartEmpty.png" alt="Empty Cart" class="cart-empty-image">
                         <p>No items in your cart</p>
                         <p>Take a look at and add your favorites</p>
                         <button class="go-shopping-button">Go shopping</button>
                     </div>
                <div>                       
            </div>
    </main>

    <script src="iphone16.js"></script>
</body>
</html>