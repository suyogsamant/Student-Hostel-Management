<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:Index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="css/googlefont.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
    <script src="js/c4254e24a8.js"></script>

    <style>
        body {
            background: #03a9f4;
        }

        /*Section*/

        section {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 98vh;
            background: #112d42;
        }

        section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: #03a9f4;
        }

        section .container {
            position: relative;
            min-width: 1100px;
            min-height: 550px;
            display: flex;
            z-index: 1000;
        }

        section .container .contactinfo {
            position: absolute;
            top: 40px;
            width: 350px;
            height: calc(100% - 80px);
            background: #0f3959;
            z-index: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2);
        }

        section .container .contactinfo h2 {
            color: #fff;
            font-size: 24px;
            font-weight: 500;
        }

        section .container .contactinfo .info {
            position: relative;
            margin: 20px 0;
        }

        section .container .contactinfo .info li {
            position: relative;
            margin: 20px 0;
            list-style: none;
            display: flex;
            cursor: pointer;
            align-items: flex-start;
        }

        section .container .contactinfo .info li span:nth-child(1) {
            width: 30px;
            min-width: 30px;
        }

        section .container .contactinfo .info li span:nth-child(1) i {
            max-width: 100%;
            filter: invert(0);
            opacity: 1;
        }

        section .container .contactinfo .info li span:nth-child(2) {
            color: #fff;
            margin-left: 10px;
            font-weight: 300;
            opacity: 0.5;
        }

        section .container .contactinfo .info li span:nth-child(1) i,
        section .container .contactinfo .info li span:nth-child(2) {
            opacity: 0.8;
        }

        section .container .contactinfo .sci {
            position: relative;
            display: flex;
        }

        section .container .contactinfo .sci li {
            list-style: none;
            margin-right: 30px;
        }

        section .container .contactinfo .sci li a {
            text-decoration: none;
        }

        section .container .contactinfo .sci li a i {
            filter: invert(0);
            opacity: 0.5;
        }

        section .container .contactinfo .sci li:hover a i {
            opacity: 1;
        }

        section .container .contactForm {
            position: absolute;
            padding: 70px 50px;
            background: #fff;
            margin-left: 150px;
            padding-left: 250px;
            width: calc(100% - 150px);
            height: 100%;
            box-shadow: 0 50px 50px rgba(0, 0, 0, 0.5);
        }

        section .container .contactForm h1 {
            color: #0f3959;
            font-size: 24px;
            font-weight: 650;
        }

        section .container .contactForm .formBox {
            position: relative;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-top: 30px;
        }

        section .container .contactForm .formBox .inputBox {
            position: relative;
            margin: 0 0 35px 0;
        }

        section .container .contactForm .formBox .inputBox.w50 {
            width: 47%;
        }

        section .container .contactForm .formBox .inputBox.w100 {
            width: 100%;
        }

        section .container .contactForm .formBox .inputBox input,
        section .container .contactForm .formBox .inputBox textarea {
            width: 100% !important;
            padding: 5px 0;
            resize: none;
            font-size: 15px;
            font-weight: 300;
            color: #333;
            border: none;
            border-bottom: 1px solid #777;
            outline: none;
        }

        section .container .contactForm .formBox .inputBox textarea {
            min-height: 120px;
        }

        section .container .contactForm .formBox .inputBox span {
            position: absolute;
            left: 0;
            padding: 5px 0;
            font-size: 13px;
            font-weight: 300;
            color: #333;
            transition: 0.5s;
            pointer-events: none;
        }

        section .container .contactForm .formBox .inputBox input:focus~span,
        section .container .contactForm .formBox .inputBox textarea:focus~span,
        section .container .contactForm .formBox .inputBox input:valid~span,
        section .container .contactForm .formBox .inputBox textarea:valid~span {
            transform: translateY(-20px);
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 1px;
            color: #ff568c;
        }

        section .container .contactForm .formBox .inputBox input[type="submit"] {
            position: relative;
            cursor: pointer;
            background: #0f3959;
            color: #fff;
            font-size: 16px;
            border: none;
            max-width: 150px;
            padding: 12px;
        }

        section .container .contactForm .formBox .inputBox input[type="submit"]:hover {
            background: #ff568c;
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
            <div class="contactinfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-map-marker fa-lg"></i></span>
                            <span>SRIEIT,<br>Shivshail, Karai,<br>Shiroda, Goa <br> 403103</span>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope fa-lg"></i></span>
                            <span>principal.ritgoa@gmail.com</span>
                        </li>
                        <li>
                            <span><i class="fa fa-phone fa-lg"></i></span>
                            <span>+91 - 0123456789</span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                </ul>
            </div>
            <div class="contactForm">
                <h1>Send a Message</h1>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>First Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>Last Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>Mobile Number</span>
                    </div>
                    <div class="inputBox w50">
                        <textarea type="text" name="" required></textarea>
                        <span>Write your message here...</span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" value="Send" required>
                    </div>
                </div>
            </div>
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