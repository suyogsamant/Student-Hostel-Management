<?php
session_start();
?>

<?php
include 'config.php';

if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from Admin where email = '$email'";
    $query = mysqli_query($conn, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "Login Successful";
            ?>
                <script>
                    location.replace("Home.php");
                </script>
            <?php
        }else{
            echo "Password Incorrect";
        }
    }else{
        echo "Invalid Email";
    }
}

if(isset($_POST['signup'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "select * from Admin where email = '$email'";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo "Email already exists";
    }else{
        if($password === $cpassword){
            $insertquery = "insert into Admin(username, email, password, cpassword) 
                            values('$username','$email','$pass','$cpass')";
            $iquery = mysqli_query($conn, $insertquery);
            
            if($conn){
                ?>
                    <script>
                        alert("Inserted Successful");
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("Not Inserted");
                    </script>
                <?php
            }
        }else{
            ?>
                <script>
                    alert("Password are not matching");
                </script>
            <?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/c4254e24a8.js"></script>
    <link rel="stylesheet" href="css/IndexStyle.css" />
    <title>User Access</title>
</head>
<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" name="signin" method="POST" class="sign-in-form" onsubmit="return validateForm()">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" placeholder="Email Address" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <input type="submit" name="signin" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" name="signup" method="POST" class="sign-up-form" onsubmit="return validateForm2()">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email Address" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="cpassword" placeholder="Confirm Password" />
                    </div>
                    <input type="submit" name="signup" class="btn" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>Register Now, It's Easy and very Quick!!!</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="img/Register.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Login here & Stay updated about your Hostel world!!!</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="img/Login.svg" class="image" alt="" />
            </div>
        </div>
    </div>

<script src="js/App.js"></script>
</body>
</html>