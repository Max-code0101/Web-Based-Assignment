document.addEventListener('DOMContentLoaded', function () {
    // DOM Elements
    const slides = document.querySelector('.slides');
    const prevButton = document.querySelector('.slider-button.prev');
    const nextButton = document.querySelector('.slider-button.next');
    const colorOptions = document.querySelectorAll('.color-option');
    const storageOptions = document.querySelectorAll('.storage-option');
    const addToCartButton = document.querySelector('.add-to-cart');
    const stickyPrice = document.getElementById('sticky-price');
    const cartCountElements = document.querySelectorAll('.cart-count');
    const cartItemsContainers = document.querySelectorAll('.cart-items');
    const cartTotalElements = document.querySelectorAll('.cart-total');
    const CART_STORAGE_KEY = 'iphone16_cart';

    // New DOM Elements for "View more" and "View less"
    const viewMoreBtn = document.getElementById('view-more-btn');
    const viewLessBtn = document.getElementById('view-less-btn');
    const descriptionShort = document.getElementById('description-short');
    const descriptionFull = document.getElementById('description-full');

    // State Management
    let currentSlideIndex = 0;
    let selectedColor = null;
    let selectedStorage = null;
    let selectedPrice = 3999;
    let cartItems = JSON.parse(localStorage.getItem(CART_STORAGE_KEY)) || [];

    // Slide Navigation
    function navigateToSlide(index) {
        const slideWidth = slides.children[0].clientWidth;
        slides.style.transform = `translateX(-${slideWidth * index}px)`;
        currentSlideIndex = index;
    }

    // Event Listeners for Slider Controls
    if (nextButton && prevButton) {
        nextButton.addEventListener('click', () => {
            currentSlideIndex < slides.children.length - 1
                ? navigateToSlide(currentSlideIndex + 1)
                : navigateToSlide(0);
        });

        prevButton.addEventListener('click', () => {
            currentSlideIndex > 0
                ? navigateToSlide(currentSlideIndex - 1)
                : navigateToSlide(slides.children.length - 1);
        });
    }

    // Color Selection Handling
    colorOptions.forEach(option => {
        option.addEventListener('click', function () {
            colorOptions.forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
            selectedColor = this.dataset.color;
            validateAddToCartButton();
        });
    });

    // Storage Selection Handling
    storageOptions.forEach(option => {
        option.addEventListener('click', function () {
            storageOptions.forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
            selectedStorage = this.dataset.storage;
            selectedPrice = parseInt(this.dataset.price);
            updatePriceDisplay();
            validateAddToCartButton();
        });
    });

    // Price Display Updates
    function updatePriceDisplay() {
        stickyPrice.textContent = `RM ${selectedPrice.toLocaleString()}.00`;
        const monthlyPayment = (selectedPrice / 24).toFixed(2);
        document.querySelector('.financing-info').innerHTML = `or <strong>RM ${monthlyPayment}/month</strong> for 24 months*`;
    }

    // Add to Cart Functionality
    addToCartButton?.addEventListener('click', () => {
        const newItem = {
            product: "iPhone 16",
            color: selectedColor,
            storage: selectedStorage,
            price: selectedPrice,
            image: `Gallery/iphone16_${selectedColor}.jpg`, // Add image path
            quantity: 1, // Add quantity property
            timestamp: Date.now(),
        };

        // Check if the same item (color and storage) already exists in the cart
        const existingItemIndex = cartItems.findIndex(
            (item) => item.color === newItem.color && item.storage === newItem.storage
        );

        if (existingItemIndex !== -1) {
            // If the same item exists, increase its quantity
            cartItems[existingItemIndex].quantity += 1;
        } else {
            // Otherwise, add the new item to the cart
            cartItems.push(newItem);
        }

        localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cartItems));
        updateCartDisplay();
        showConfirmationAlert(newItem);
    });

    // Cart Display Management
    function updateCartDisplay() {
        cartCountElements.forEach((element) => {
            // Calculate the total quantity of items in the cart
            const totalQuantity = cartItems.reduce((sum, item) => sum + item.quantity, 0);
            element.textContent = totalQuantity;
        });

        cartItemsContainers.forEach((container) => {
            container.innerHTML = '';
            cartItems.forEach((item) => {
                container.innerHTML += `
                    <div class="cart-item">
                        <div class="cart-item-image">
                            <img src="${item.image}" alt="${item.product} ${item.color}">
                        </div>
                        <div class="cart-item-info">
                            <div><strong>${item.product}</strong></div>
                            <div>Color: ${item.color}</div>
                            <div>Storage: ${item.storage}</div>
                            <div>Quantity: ${item.quantity}</div> <!-- Display quantity -->
                        </div>
                        <div class="cart-item-price">
                            RM ${(item.price * item.quantity).toLocaleString()}.00 <!-- Calculate total price -->
                        </div>
                    </div>
                `;
            });
        });

        // Update total prices
        cartTotalElements.forEach((element) => {
            const totalAmount = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);
            element.textContent = `Total: RM ${totalAmount.toLocaleString()}.00`;
        });

        if (cartItems.length === 0) {
            cartEmptyContainers.forEach((container) => (container.style.display = 'block')); // Show empty cart message
            cartItemsContainers.forEach((container) => (container.style.display = 'none')); // Hide cart items
            cartTotalElements.forEach((element) => (element.style.display = 'none')); // Hide total price
        } else {
            cartEmptyContainers.forEach((container) => (container.style.display = 'none')); // Hide empty cart message
            cartItemsContainers.forEach((container) => (container.style.display = 'block')); // Show cart items
            cartTotalElements.forEach((element) => (element.style.display = 'block')); // Show total price
        }
    }

    // Go shopping button functionality
    goShoppingButtons.forEach((button) => {
        button.addEventListener('click', () => {
            window.location.href = 'index2.php'; // Redirect to the products page
        });
    });

    // Initialize Cart Page
    function initializeCartPage() {
        if (document.querySelector('.cart-page')) {
            const itemsContainer = document.querySelector('.cart-items-list');
            const totalElement = document.querySelector('.cart-total-page');
            const countElement = document.querySelector('.cart-items-count');

            function renderCartItems() {
                itemsContainer.innerHTML = '';
                const totalAmount = cartItems.reduce((sum, item) => sum + item.price * item.quantity, 0);

                cartItems.forEach((item) => {
                    const itemElement = document.createElement('div');
                    itemElement.className = 'cart-item';
                    itemElement.innerHTML = `
                        <div class="cart-item-image">
                            <img src="${item.image}" alt="${item.product} ${item.color}">
                        </div>
                        <div class="cart-item-info">
                            <div><strong>${item.product}</strong></div>
                            <div>Color: ${item.color}</div>
                            <div>Storage: ${item.storage}</div>
                            <div>Quantity: ${item.quantity}</div> <!-- Display quantity -->
                        </div>
                        <div class="cart-item-price">
                            RM ${(item.price * item.quantity).toLocaleString()}.00 <!-- Calculate total price -->
                        </div>
                        <div class="cart-item-delete" data-timestamp="${item.timestamp}">
                            <span class="delete-icon">🗑️</span>
                            <div class="delete-confirmation">
                                <p>Are you sure to remove this item?</p>
                                <div class="confirm-buttons">
                                    <button class="confirm-button confirm-no">No</button>
                                    <button class="confirm-button confirm-yes">Yes</button>
                                </div>
                            </div>
                        </div>
                    `;

                    const deleteBtn = itemElement.querySelector('.cart-item-delete');
                    const confirmBox = deleteBtn.querySelector('.delete-confirmation');

                    deleteBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        document.querySelectorAll('.delete-confirmation').forEach((box) => {
                            if (box !== confirmBox) box.style.display = 'none';
                        });
                        confirmBox.style.display = confirmBox.style.display === 'block' ? 'none' : 'block';
                    });

                    confirmBox.querySelector('.confirm-yes').addEventListener('click', () => {
                        cartItems = cartItems.filter((i) => i.timestamp !== item.timestamp);
                        localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cartItems));
                        renderCartItems();
                        updateCartDisplay();
                    });

                    confirmBox.querySelector('.confirm-no').addEventListener('click', () => {
                        confirmBox.style.display = 'none';
                    });

                    itemsContainer.appendChild(itemElement);
                });

                totalElement.textContent = `Total: RM ${totalAmount.toLocaleString()}.00`;
                countElement.textContent = `${cartItems.length} ${cartItems.length === 1 ? 'item' : 'items'} in cart`;
            }

            renderCartItems();

            document.addEventListener('click', (e) => {
                if (!e.target.closest('.cart-item-delete')) {
                    document.querySelectorAll('.delete-confirmation').forEach((box) => {
                        box.style.display = 'none';
                    });
                }
            });
        }
    }


    // Helper Functions
    function validateAddToCartButton() {
        addToCartButton.disabled = !(selectedColor && selectedStorage);
    }

    
    function updateProductImage(imageSource) {
        document.querySelectorAll('.slide').forEach((img, index) => {
            if (img.src.includes(imageSource)) navigateToSlide(index);
        });
    }

    function showConfirmationAlert(item) {
        alert(`Added to cart: ${item.product} (${item.color}, ${item.storage}) - RM ${item.price.toLocaleString()}.00`);
    }


    // Toggle Description Visibility
    if (viewMoreBtn) {
        viewMoreBtn.addEventListener('click', function () {
            descriptionShort.style.display = 'none'; // Hide short description
            descriptionFull.style.display = 'block'; // Show full description
        });
    }

    if (viewLessBtn) {
        viewLessBtn.addEventListener('click', function () {
            descriptionFull.style.display = 'none'; // Hide full description
            descriptionShort.style.display = 'block'; // Show short description
        });
    }

    // Initial Setup
    updateCartDisplay();
    initializeCartPage();
    validateAddToCartButton();
});