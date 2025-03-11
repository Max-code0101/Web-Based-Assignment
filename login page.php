<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
</head>
<body>
    <div class="wrapper">
    <?php
    session_start();
        if (isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT*FROM users WHERE email= '$email'";
            $result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if ($user){
                if(password_verify($password,$user["password"])){
                    $_SESSION["user_id"] = $user["id"];
                    $_SESSION["user_name"] = $user["full_name"];
                    header("Location:index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }


            }else
            {
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }

        }

        ?>
        <form action="login page.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email Address" required>
                <i class='bx bxs-user' ></i>
            </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                    
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password</a>
            </div>
            <button type="submit" class="btn" name="login">Login</button>

            <div class="register-link">
                <p >Don't have an account?<a href="register.php">Register</a></p>
            </div>
        </form>
    </div>   
</body>
</html>