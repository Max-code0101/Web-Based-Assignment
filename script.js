// script.js
document.addEventListener('DOMContentLoaded', function() {
    // DOM Elements
    const slides = document.querySelector('.slides');
    const prevButton = document.querySelector('.slider-button.prev');
    const nextButton = document.querySelector('.slider-button.next');
    const colorOptions = document.querySelectorAll('.color-option');
    const storageOptions = document.querySelectorAll('.storage-option');
    const addToCartButton = document.querySelector('.add-to-cart');
    const stickyPrice = document.getElementById('sticky-price');
    const financingInfo = document.querySelector('.financing-info');
    const cartCountElements = document.querySelectorAll('.cart-count');
    const cartItemsContainers = document.querySelectorAll('.cart-items');
    const cartTotalElements = document.querySelectorAll('.cart-total');
    const CART_STORAGE_KEY = 'iphone16_cart';

    // State Management
    let currentSlideIndex = 0;
    let selectedColor = null;
    let selectedStorage = null;
    let selectedPrice = 3999;
    let cartItems = JSON.parse(localStorage.getItem(CART_STORAGE_KEY)) || [];

    // Slide Navigation Functions
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
        option.addEventListener('click', function() {
            // Remove previous selections
            colorOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Update state
            this.classList.add('selected');
            selectedColor = this.dataset.color;
            updateProductImage(this.dataset.image);
            validateAddToCartButton();
        });
    });

    // Storage Selection Handling
    storageOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Remove previous selections
            storageOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Update state
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
        financingInfo.innerHTML = `or <strong>RM ${monthlyPayment}/month</strong> for 24 months*`;
    }

    // Add to Cart Functionality
    addToCartButton?.addEventListener('click', () => {
        const newItem = {
            product: "iPhone 16",
            color: selectedColor,
            storage: selectedStorage,
            price: selectedPrice,
            image: "Gallery/iphone16_${selectedColor}.jpg", // Add image path
            timestamp: Date.now()
        };
        
        cartItems.push(newItem);
        localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cartItems));
        updateCartDisplay();
        showConfirmationAlert(newItem);
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

    // Cart Page Initialization
    function initializeCartPage() {
        if (document.querySelector('.cart-page')) {
            const itemsContainer = document.querySelector('.cart-items-list');
            const totalElement = document.querySelector('.cart-total-page');
            const countElement = document.querySelector('.cart-items-count');

            // Clear existing content
            itemsContainer.innerHTML = '';

            // Calculate total
            const totalAmount = cartItems.reduce((sum, item) => sum + item.price, 0);

            // Populate items
            cartItems.forEach(item => {
                itemsContainer.innerHTML += `
                    <div class="cart-item">
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

            // Update totals
            totalElement.textContent = `Total: RM ${totalAmount.toLocaleString()}.00`;
            countElement.textContent = `${cartItems.length} ${cartItems.length === 1 ? 'item' : 'items'} in cart`;
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

    // Initial Setup
    updateCartDisplay();
    initializeCartPage();
    validateAddToCartButton();
});

// JavaScript for "View more" and "View less" functionality
document.getElementById('view-more-btn')?.addEventListener('click', function() {
    document.getElementById('description-short').style.display = 'none';
    document.getElementById('description-full').style.display = 'block';
});

document.getElementById('view-less-btn')?.addEventListener('click', function() {
    document.getElementById('description-full').style.display = 'none';
    document.getElementById('description-short').style.display = 'block';
});