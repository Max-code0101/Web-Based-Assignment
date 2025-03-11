<!DOCTYPE html>
<html>

<HEAD>
    <title>Aepple Store Online</title>
    <link rel="stylesheet" href="style.css">
</HEAD>

<body>

    <nav class="top-bar ">
        <img src="Gallery/aeple logo.png" alt="Iphone Logo" style="width:30px ; height:30px;">
        <a class="main-link" href="index2.php">Ifone</a>
        <a class="main-link" href="Ipad.php">Ipad</a>
        <a class="main-link" href="Mac.php">Mac</a>
        <a class="main-link" href="Earphone.php">Earphone</a>
        
            <div class="dropdown">
                
            <img src="Gallery/login icon.png" class="profile-button" alt="Dropdown" onclick="myFunction()" style="width:50px; cursor:pointer;">
                <div id="myDropdown" class="dropdown-content">
                <a href="login page.php">Login</a>
                <a href="user_profile.php">User Profile</a>
                <a href="#">Logout</a>
                </div>
            </div>
            <script src="profile-dropdown.js"></script>

    </nav>

    <p></p>

    <div class="subtitle">
        <div class="main-title">
            <strong strong id="APPLE">APPLE REVOLUTION</strong>
        </div>
    </div>
    <div class="small-sub-title">
        <h1>Is Holding in Your Hands</h1>
    </div>

    <div class="main-photo">
        <div class="photo-container">
            <a href="iPhone.php">
            <img id="Iphone16" src="Gallery/Iphone16.jpg" alt="iPhone 16 product image" width="300px" height="100px">
            </a>
        </div>
        <div class="photo-container">
            <a href="Ipad.php">
            <img id="Apple-Ipad-Pro" src="Gallery/Apple-Ipad-Pro.jpg" alt="IPad Pro with stylus">
            </a>
        </div>
        <div class="photo-container">
            <img id="Apple-Watch" src="Gallery/Apple-Watch.jpg" alt="Apple Watch">
        </div>
        <div class="photo-container">
            <img id="Apple-VR" src="Gallery/Apple-VR.jpg" alt="Apple VR">
        </div>
    </div>
</body>

</html>