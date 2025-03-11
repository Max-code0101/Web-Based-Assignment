<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width,initial-scale=1.0">
        <title>user profile</title>
        <link rel="stylesheet" href="user_profile.css">

</head>
<body>
        
    <button class="logout" id="logout-button">LOG OUT</button>
    <button type="submit" class="btn" name="login">LOG OUT</button>

    <div class="profile">
        <!-- Portrait -->
        <div class="portrait-container">
            <img src="Gallery\default img.png" alt="potrait" id="portrait" class="portrait">
            <input type="file" id="upload-input" accept="image/*" style="display: none;">
            <label for="upload-input" class="upload-button">Change profile Photo</label>
        </div>

        <div class="user-info">
            <div class="nameid">Name:</div>
            <div class="nameid">User ID:</div>
        </div>
    </div>

    <!-- JavaScript for Image Upload and Logout -->
    <script>
        // Image Upload Functionality
        document.getElementById('upload-input').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('portrait').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Logout Functionality
        document.getElementById('logout-button').addEventListener('click', function () {
            if (confirm('Are you sure that you want to logout?')) {
                window.location.href = 'login page.html'; // Replace with your logout page
            }
        });
    </script>
            <hr/>
            
            <div clas="menu">
            <a href="address.html" class="clickable">
                <span><strong>Address</strong></span>
                <span class="click">&gt;</span>
            </a>
        

        <hr/>

        <a href="cart.html" class="clickable">
            <span><strong>Cart</strong></span>
            <span class="click">&gt;</span>
            </a>
    
            <hr/>

        <a href="purchased.html" class="clickable">
        <span><strong>Purchased</strong></span>
        <span class="click">&gt;</span>
        </a>

        <hr/>

        <a href="shipment.html" class="clickable">
            <span><strong>Awaiting Shipment</strong></span>
            <span class="click">&gt;</span>
            </a>
            
            <hr/>

            <a href="pending.html" class="clickable">
                <span><strong>Pending Payment</strong></span>
                <span class="click">&gt;</span>
                </a>
                
                <hr/>

            <a href="setting.html" class="clickable">
                <span><strong>Setting</strong></span>
                <span class="click">&gt;</span>
                </a>
                
                <hr/>
        
            </div>
        </div>
    </div>
            
</body>


</html>