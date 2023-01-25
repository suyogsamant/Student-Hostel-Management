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
    <title>Fees</title>
    <link href="css/googlefont.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">
    <script src="js/c4254e24a8.js"></script>

    <style>
        /*Fees Display*/

        section {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 85vh;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .container .box {
            position: relative;
            width: 350px;
            padding: 40px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center;
        }

        .container .box::before {
            content: '';
            width: 50%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, .2);
            z-index: 2;
            pointer-events: none;
        }

        .container .box .icon {
            position: relative;
            width: 90px;
            height: 90px;
            color: #fff;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            border-radius: 50%;
            font-size: 25px;
            font-weight: 700;
            transition: 1s;
        }

        .container .box:nth-child(1) .icon {
            box-shadow: 0 0 0 0 #e91e63;
            background: #e91e63;
        }

        .container .box:nth-child(1):hover .icon {
            box-shadow: 0 0 0 400px #e91e63;
        }

        .container .box:nth-child(2) .icon {
            box-shadow: 0 0 0 0 #23e629;
            background: #23e629;
        }

        .container .box:nth-child(2):hover .icon {
            box-shadow: 0 0 0 400px #23e629;
        }

        .container .box:nth-child(3) .icon {
            box-shadow: 0 0 0 0 #2196f3;
            background: #2196f3;
        }

        .container .box:nth-child(3):hover .icon {
            box-shadow: 0 0 0 400px #2196f3;
        }

        .container .box .content {
            position: relative;
            z-index: 1;
            transition: 0.5s;
        }

        .container .box:hover .content {
            color: #fff;
        }

        .container .box .content h3 {
            font-size: 20px;
            margin: 10px 0;
            padding: 0;
        }

        .container .box .content p {
            margin: 0;
            padding: 0;
        }

        .container .box .content a {
            display: inline-block;
            padding: 10px 20px;
            background: #fff;
            border-radius: 5px;
            text-decoration: none;
            color: #000;
            font-weight: 500;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
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
                    <a href="#"><?php echo $_SESSION['username'];?></a>
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
            <div class="box">
                <div class="icon">Rs. 8000</div>
                <div class="content">
                    <h3>Hostel Fees</h3>
                    <p>Rooms with beds and mattress</p>
                    <p>Individual lockable almirahs for storage</p>
                    <p>Geysers in washrooms</p>
                    <p>Study tables and Dressing Mirror</p>
                    <p>Tube lights & LED</p>
                    <p>Dust Bin in each room</p>
                    <p>Washrooms with Sanitary fittings</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">Rs. 3000</div>
                <div class="content">
                    <h3>Mess Fees</h3>
                    <p>Breakfast</p>
                    <p>Evening snacks</p>
                    <p>Coffee & Tea available at hostel</p>
                    <p>Dinner to be served daily</p>
                    <p>Lunch served on weekends only</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="box">
                <div class="icon">Rs. 2000</div>
                <div class="content">
                    <h3>Utility Fees</h3>
                    <p>Student to pay for their rooms' electricity charges</p>
                    <p>There will be prepaid meters installed for the same</p>
                    <p>Student will be charged INR 6/unit for electricity (plus convenience charges)</p>
                    <a href="#">Read More</a>
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