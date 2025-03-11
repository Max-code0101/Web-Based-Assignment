<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="register.style.css">
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
    
        <div class="card p-4 shadow form-container">
           
        <?php
        if (isset($_POST["submit"])){

            $fullName=$_POST["fullname"];
            $email=$_POST["email"];
            $phone_num=$_POST["phone"];
            $password=$_POST["password"];
            $passwordRepeat=$_POST["repeat_password"];

            $passwordHash=password_hash($password,PASSWORD_DEFAULT);
            $errors=array();

            if  ((empty($fullName)) || empty($email) || empty($phone_num) || empty($password) || empty($passwordRepeat)){
                array_push($errors,"All fields are required");

            }

            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                array_push($errors,"Email is not valid");

            }
            if (strlen($password)<8){
                array_push($errors,"password must be at least 8 characters long");
            }

            if($password!==$passwordRepeat){
                array_push($errors,"Password does not match");
            
            }

            if (count($errors)>0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else{

                require_once "database.php";
                $sql = "INSERT INTO users(full_name,email,phone_num,password) VALUES (?,?,?,?)";

                $stmt=mysqli_stmt_init($conn);
                $prepareStmt=mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt){
                    mysqli_stmt_bind_param($stmt,"ssss",$fullName,$email,$phone_num,$passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo"<div class='alert alert-success'>You are registered successfully.</div>";
                }
                else{
                    die("Somethings went wrong");
                }


            }
        }
        ?>
        
        
            <h2 class="text-center text-primary">Register</h2>
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email Address" >
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" >
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" >
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password" >
                </div>
                <button type="submit" class="btn btn-primary w-100" name="submit">Register</button>
                
            </form>
        </div>
    </div>
</body>
</html>
