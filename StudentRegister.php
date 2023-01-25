<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:Index.php');
}
?>

<?php
include 'config.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $rollno = $_POST['rollno'];
    $course = $_POST['course'];
    $sem = $_POST['sem'];
    $hblock = $_POST['hblock'];
    $roomno = $_POST['roomno'];
    $status = $_POST['status'];

    $insertquery = "insert into Student(firstname,middlename,lastname,gender,address,dob,email,phno,
        rollno,course,sem,hblock,roomno,status) values ('$firstname','$middlename','$lastname','$gender',
        '$address','$dob','$email','$phno','$rollno','$course','$sem','$hblock','$roomno','$status')";

    $res = mysqli_query($conn, $insertquery);

    if($res){
        ?>
        <script>
            alert("Data registered successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Data cannot be registered, please check your details again!!");
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
    <link href="css/googlefont.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
    <script src="js/c4254e24a8.js"></script>

    <style>
        body {
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        /*Student Registration*/

        section {
            height: 120vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .container {
            max-width: 900px;
            width: 100%;
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 50px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .container form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box, select {
            margin-bottom: 20px;
            width: calc(100% / 3 - 15px);
        }

        form .input-box .details, select {
            display: block;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .user-details .input-box input, select {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            color: black;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: #9b59b6;
        }

        .user-details .input-box select:focus,
        .user-details .input-box select:valid {
            border-color: #9b59b6;
        }
        
        form .gender-details{
            margin-bottom: 10px;
        }

        form .gender-details .gender-title {
            font-size: 19px;
            font-weight: 500;
        }

        form .category {
            display: flex;
            width: 100%;
            margin: 14px 0;
            justify-content: space-between;
        }

        form .category label {
            display: flex;
            align-items: center;
            padding-right: 10vh;
            cursor: pointer;
        }

        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        #dot-1:checked~.category label .one,
        #dot-2:checked~.category label .two,
        #dot-3:checked~.category label .three {
            background: #9b59b6;
            border-color: #d9d9d9;
        }

        form input[type="radio"] {
            display: none;
        }

        .container form .button {
            height: 45px;
            width: 100%;
            margin: 20px 0
        }

        .container form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .container form .button input:hover {
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }

        @media(max-width: 584px) {
            .container {
                max-width: 100%;
            }

            form .user-details .input-box, select {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            form .user-details {
                max-height: 300px;
                overflow-y: scroll;
            }

            .user-details::-webkit-scrollbar {
                width: 5px;
            }
        }

        @media(max-width: 459px) {
            .container .category {
                flex-direction: column;
            }
        }
    </style>

</head>
<body>
    
    <header>
        <div class="mainheader">
            <div class="logo">
                <img src="img/logo.svg">
            </div>
            <div class="logo-name">
                <h1>Student Hostel</h1>
            </div>
            <nav>
                <a href="Home.php">Home</a>
                <div class="dropdown">
                    <a href="">Students</a>
                    <div class="dropdown-content">
                        <a href="StudentRegister.php">Register</a>
                        <a href="StudentUpdate.php">Update</a>
                        <a href="StudentView.php">View Records</a>
                    </div>
                </div>
                <a href="Fees.php">Fees</a>
                <div class="dropdown">
                    <a href="">Visitors</a>
                    <div class="dropdown-content">
                        <a href="VisitorRegister.php">Register</a>
                        <a href="VisitorUpdate.php">Update</a>
                        <a href="VisitorView.php">View Records</a>
                    </div>
                </div>
                <a href="Contacts.php">Contact Us</a>
                <div class="menubtn-dropdown">
                    <i class="fas fa-user"></i>
                    <a href=""><?php echo $_SESSION['username'];?></a>
                    <div class="menubtn-content">
                        <a href="">Settings</a>
                        <a href="Logout.php">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="title">Student Registration</div>
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="firstname" id="firstname" placeholder="Enter your First Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Middle Name</span>
                        <input type="text" name="middlename" id="middlename" placeholder="Enter your Middle Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lastname" id="lastname" placeholder="Enter your Last Name" required>
                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" value="Male" id="dot-1" required>
                        <input type="radio" name="gender" value="Female" id="dot-2">
                        <input type="radio" name="gender" value="Others" id="dot-3">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address" id="address" placeholder="Enter your Address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">DOB</span>
                        <input type="date" name="dob" id="dob" placeholder="Enter your DOB" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" id="email" placeholder="Enter your Email-id" required>
                    </div>                    
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="number" name="phno" id="phno" placeholder="Enter your Phone Number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Roll Number</span>
                        <input type="text" name="rollno" id="rollno" placeholder="Enter your Roll Number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Course</span>
                        <select name="course" id="course" required>
                            <option value="" disabled selected>Choose...</option>
                            <option value="COMP">Computer Engineering</option>
                            <option value="IT">Information Technology</option>
                            <option value="ETC">Electronics & Telecommunication</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Semester</span>
                        <select name="sem" id="sem" required>
                            <option value="" disabled selected>Choose...</option>
                            <option value="1">I</option>
                            <option value="2">II</option>
                            <option value="3">III</option>
                            <option value="4">IV</option>
                            <option value="5">V</option>
                            <option value="6">VI</option>
                            <option value="7">VII</option>
                            <option value="8">VIII</option>
                        </select>
                    </div>                    
                    <div class="input-box">
                        <span class="details">Hostel Block</span>
                        <select name="hblock" id="hblock" required>
                            <option value="" disabled selected>Choose...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Room Number</span>
                        <input type="number" name="roomno" id="roomno" placeholder="Confirm your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Status</span>
                        <select name="status" id="status" required>
                            <option value="" disabled selected>Choose...</option>
                            <option value="regular">Regular</option>
                            <option value="tng">TNG</option>
                            <option value="blocked">Blocked</option>
                        </select>
                    </div>                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Register">
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="row">
            <div class="col">
                <h2>Student Hostel</h2>
                <p>Please stay updated</p>
            </div>
            <div class="col">
                <h3>Get In Touch</h3>
                <p>SRIEIT, </p>
                <p>Shivshail, Karai,</p>
                <p>Shiroda, Goa 403103</p>
                <p class="email-id">principal.ritgoa@gmail.com</p>
                <h4>+91 - 0123456789</h4>
            </div>
            <div class="col">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="StudentRegister.php">Students</a></li>
                    <li><a href="Fees.php">Fees</a></li>
                    <li><a href="VisitorRegister.php">Visitors</a></li>
                    <li><a href="Contacts.php">Contacts Us</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Newsletter</h3>
                <form action="#">
                    <i class="far fa-envelope"></i>
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">Suyog Samant © 2021 - All Rights Reserved</p>
    </footer>

</body>
</html>