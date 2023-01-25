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
    <title>Home</title>
    <link href="css/googlefont.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
    <script src="js/c4254e24a8.js"></script>

    <style>
        /* Main */

        main {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        main .right-sec {
            padding-right: 70px;
            margin-bottom: 40px;
        }

        main .left-sec {
            padding-left: 100px;
        }

        .left-sec h2 {
            font-size: 20px;
            text-transform: capitalize;
            font-weight: lighter;
            color: #242424;
            margin-top: 10px;
        }

        .left-sec h1 {
            font-size: 55px;
            text-transform: capitalize;
            font-weight: 700;
            margin: 15px 0;
        }

        .left-sec p {
            margin-bottom: 20px;
        }

        .left-sec a {
            padding: 10px 40px;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            color: #fff;
            border: none;
            background-image: linear-gradient(to right, #649bff, #0070fa, #649bff);
            border-radius: 20px;
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

    <main>
        <section class="left-sec">
            <h2>We Are Here For Your Care</h2>
            <h1>Best Hostel Facilities</h1>
            <p>We are here for your care 24/7. Any help just call us.</p>
            <a href="">Get Started</a>
        </section>

        <section class="right-sec">
            <figure>
                <img src="img/Mainlogo.jpg">
            </figure>
        </section>
    </main>

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