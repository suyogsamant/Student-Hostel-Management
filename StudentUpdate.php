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
    <title>Student Record Update</title>
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
        <h4 style="text-align: center;">Update Student Records</h4>
        <br>
        <div>
            <div id="records_contant"></div>
        </div>

        <!-- Update Modal -->
        <div class="modal fade" id="update_user_modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Update Visitor Record</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col">
                                <label for="update_firstname">Firstname:</label>
                                <input type="text" id="update_firstname" class="form-control" placeholder="Firstname">
                            </div>
                            <div class="col">
                                <label for="update_middlename">Middlename:</label>
                                <input type="text" id="update_middlename" class="form-control" placeholder="Middlename">
                            </div>
                            <div class="col">
                                <label for="update_lastname">Lastname:</label>
                                <input type="text" id="update_lastname" class="form-control" placeholder="Lastname">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="update_gender">Gender:</label>
                                <input type="text" id="update_gender" class="form-control" placeholder="Gender">
                            </div>
                            <div class="col">
                                <label for="update_address">Address:</label>
                                <input type="text" id="update_address" class="form-control" placeholder="Address">
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="update_dob">DOB:</label>
                                <input type="date" id="update_dob" class="form-control" placeholder="DOB">
                            </div>
                            <div class="col">
                                <label for="update_email">Email:</label>
                                <input type="email" id="update_email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col">
                                <label for="update_phno">Phone No:</label>
                                <input type="number" id="update_phno" class="form-control" placeholder="Phone number">
                            </div>                            
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="update_rollno">Roll No:</label>
                                <input type="text" id="update_rollno" class="form-control" placeholder="Roll No">
                            </div>
                            <div class="col">
                                <label for="update_course">Course:</label>
                                <input type="text" id="update_course" class="form-control" placeholder="Course">
                            </div>
                            <div class="col">
                                <label for="update_sem">Semester:</label>
                                <input type="text" id="update_sem" class="form-control" placeholder="Semester">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="update_hblock">Block:</label>
                                <input type="text" id="update_hblock" class="form-control" placeholder="Block">
                            </div>
                            <div class="col">
                                <label for="update_roomno">Room No:</label>
                                <input type="number" id="update_roomno" class="form-control" placeholder="Room No">
                            </div>
                            <div class="col">
                                <label for="update_status">Status:</label>
                                <input type="text" id="update_status" class="form-control" placeholder="Status">
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" data-dismiss="modal">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="hidden" name="" id="hidden_user_id">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>

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

<script>
    $(document).ready(function(){
        readRecords();
    });

    function readRecords(){
        var readrecord = "readrecord";
        $.ajax({
            url:"stupdt.php",
            type:"post",
            data:{ readrecord:readrecord },
            success:function(data,status){
                $('#records_contant').html(data);
            }
        });
    }

    ///delete record
    function DeleteUserDetails(deleteid){
        var conf = confirm("Do you want to delete this record?");
        if(conf==true){
            $.ajax({
                url:"stupdt.php",
                type:"post",
                data:{ deleteid:deleteid },
                success:function(data,status){
                    readRecords();
                }
            });
        }
    }

    ///Update Record
    function GetUserDetails(id){
        $('#hidden_user_id').val(id);
        $.post("stupdt.php",{
            id:id
        }, 
        function(data,status){
            var user = JSON.parse(data);
            $('#update_firstname').val(user.firstname);
            $('#update_middlename').val(user.middlename);
            $('#update_lastname').val(user.lastname);
            $('#update_gender').val(user.gender);
            $('#update_address').val(user.address);
            $('#update_dob').val(user.dob);
            $('#update_email').val(user.email);
            $('#update_phno').val(user.phno);
            $('#update_rollno').val(user.rollno);
            $('#update_course').val(user.course);
            $('#update_sem').val(user.sem);
            $('#update_hblock').val(user.hblock);
            $('#update_roomno').val(user.roomno);
            $('#update_status').val(user.status);

        }
        );
        $('#update_user_modal').modal("show");
    }

    function UpdateUserDetails(){
        var firstname = $('#update_firstname').val();
        var middlename = $('#update_middlename').val();
        var lastname = $('#update_lastname').val();
        var gender = $('#update_gender').val();
        var address = $('#update_address').val();
        var dob = $('#update_dob').val();
        var email = $('#update_email').val();
        var phno = $('#update_phno').val();
        var rollno = $('#update_rollno').val();
        var course = $('#update_course').val();
        var sem = $('#update_sem').val();
        var hblock = $('#update_hblock').val();
        var roomno = $('#update_roomno').val();
        var status = $('#update_status').val();

        var hidden_user_id = $('#hidden_user_id').val();

        $.post("stupdt.php",{
            hidden_user_id:hidden_user_id,
            firstname:firstname,
            middlename:middlename,
            lastname:lastname,
            gender:gender,
            address:address,
            dob:dob,
            email:email,
            phno:phno,
            rollno:rollno,
            course:course,
            sem:sem,
            hblock:hblock,
            roomno:roomno,
            status:status,            
        },
        function(data,status){
            $('#update_user_modal').modal("hide");
            readRecords();
        }
        );
    }
</script>