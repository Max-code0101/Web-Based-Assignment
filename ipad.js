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
    const CART_STORAGE_KEY = 'ipad_m4_cart'; // Unique key for iPad Pro M4 cart

    // New DOM Elements for "View more" and "View less"
    const viewMoreBtn = document.getElementById('view-more-btn');
    const viewLessBtn = document.getElementById('view-less-btn');
    const descriptionShort = document.getElementById('description-short');
    const descriptionFull = document.getElementById('description-full');

    // State Management
    let currentSlideIndex = 0;
    let selectedColor = null;
    let selectedStorage = null;
    let selectedPrice = 5899; // Starting price for iPad Pro M4
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
        const monthlyPayment = (selectedPrice / 36).toFixed(2); // 36 months for iPad Pro M4
        document.querySelector('.financing-info').innerHTML = `or <strong>RM ${monthlyPayment}/month</strong> for 36 months*`;
    }

    // Add to Cart Functionality
    addToCartButton?.addEventListener('click', () => {
        const newItem = {
            product: "iPad Pro M4",
            color: selectedColor,
            storage: selectedStorage,
            price: selectedPrice,
            image: `Gallery/ipad${selectedColor}.jpg`, // Adjust image path for iPad
            timestamp: Date.now()
        };

        cartItems.push(newItem);
        localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cartItems));
        updateCartDisplay();
        alert(`Added to cart: ${newItem.product} (${newItem.color}, ${newItem.storage}) - RM ${newItem.price.toLocaleString()}.00`);
    });

    // Cart Display Management
    function updateCartDisplay() {
        cartCountElements.forEach(element => {
            element.textContent = cartItems.length;
        });

        cartItemsContainers.forEach(container => {
            container.innerHTML = '';
            cartItems.forEach(item => {
                container.innerHTML += `
                    <div class="cart-item">
                        <div class="cart-item-image">
                            <img src="${item.image}" alt="${item.product} ${item.color}">
                        </div>
                        <div class="cart-item-info">
                            <div><strong>${item.product}</strong></div>
                            <div>Color: ${item.color}</div>
                            <div>Storage: ${item.storage}</div>
                        </div>
                        <div class="cart-item-price">
                            RM ${item.price.toLocaleString()}.00
                        </div>
                    </div>
                `;
            });
        });

        // Update total prices
        cartTotalElements.forEach(element => {
            const totalAmount = cartItems.reduce((sum, item) => sum + item.price, 0);
            element.textContent = `Total: RM ${totalAmount.toLocaleString()}.00`;
        });
    }

    // Helper Functions
    function validateAddToCartButton() {
        addToCartButton.disabled = !(selectedColor && selectedStorage);
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
    validateAddToCartButton();
});