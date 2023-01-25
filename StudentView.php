<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:Index.php');
}
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "StudentHostel");
$query = "SELECT * FROM Student ORDER BY ID ASC";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student View</title>
    <link href="css/googlefont.css" rel="stylesheet">
    <script src="js/c4254e24a8.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/Style.css">

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

    <div class="container">
        <h3 style="text-align:center">Student Hostel Records</h3>
        <br>
        <input type="text" name="search" id="search" placeholder="Search your record" class="form-control">
        <br>
        <table id="student_data" class="table table-bordered table-sm" >
            <thead style="font-weight: 700;">
                    <tr>
                        <td>ID</td>
                        <td>Firstname</td>
                        <td>Middlename</td>
                        <td>Lastname</td>
                        <td>Gender</td>
                        <td>Address</td>
                        <td>DOB</td>
                        <td>Email</td>
                        <td>Phone No</td>
                        <td>Roll No</td>
                        <td>Course</td>
                        <td>Semester</td>
                        <td>Hostel Block</td>
                        <td>Room No</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo '  
                            <tr>  
                                <td>'.$row["id"].'</td>  
                                <td>'.$row["firstname"].'</td>  
                                <td>'.$row["middlename"].'</td>  
                                <td>'.$row["lastname"].'</td>
                                <td>'.$row["gender"].'</td>  
                                <td>'.$row["address"].'</td>
                                <td>'.$row["dob"].'</td>
                                <td>'.$row["email"].'</td> 
                                <td>'.$row["phno"].'</td>
                                <td>'.$row["rollno"].'</td>
                                <td>'.$row["course"].'</td>
                                <td>'.$row["sem"].'</td>
                                <td>'.$row["hblock"].'</td>
                                <td>'.$row["roomno"].'</td>
                                <td>'.$row["status"].'</td>  
                            </tr>  
                        ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

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

<script type="text/javascript">
    $(document).ready(function() {
        $('#search').keyup(function(){
            search_table($(this).val());
        });
        function search_table(value){
            $('#student_data tr').each(function(){
                var found = 'false';
                $(this).each(function(){
                    if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
                    {
                        found = 'true';
                    }
                });
                if(found == 'true'){
                    $(this).show();
                }
                else{
                    $(this).hide();
                }
            });
        }
    });
</script>