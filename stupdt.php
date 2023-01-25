<?php
include 'config.php';

if(isset($_POST['readrecord'])){
    $data = '<table class="table table-bordered table-sm" width="100%">
                <tr style="font-height:700">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Phone No</th>
                    <th>Roll No</th>
                    <th>Course</th>
                    <th>Sem</th>
                    <th>Block</th>
                    <th>Room No</th>
                    <th>Status</th>
                    <th>Edit Field</th>
                    <th>Delete Field</th>
                </tr>';
    $displayquery = "SELECT * FROM Student ORDER BY id ASC";
    $result = mysqli_query($conn, $displayquery);

    if(mysqli_num_rows($result) > 0){
        $number = 1;
        while ($row = mysqli_fetch_array($result)) {
            $data .= '<tr>  
                <td>' . $number . '</td>  
                <td>' . $row["firstname"] . '</td>  
                <td>' . $row["middlename"] . '</td>  
                <td>' . $row["lastname"] . '</td>
                <td>' . $row["gender"] . '</td>
                <td>' . $row["address"] . '</td>
                <td>' . $row["dob"] . '</td>
                <td>' . $row["email"] . '</td>
                <td>' . $row["phno"] . '</td>
                <td>' . $row["rollno"] . '</td>
                <td>' . $row["course"] . '</td>
                <td>' . $row["sem"] . '</td>
                <td>' . $row["hblock"] . '</td>
                <td>' . $row["roomno"] . '</td>
                <td>' . $row["status"] . '</td>
                <td>
                    <button onclick="GetUserDetails('.$row['id'].')"
                        class="btn btn-info">Edit</button>
                </td>
                <td>
                    <button onclick="DeleteUserDetails('.$row['id'].')"
                        class="btn btn-dark">Delete</button>
                </td>
            </tr>';
            $number++;
        }
    }
    $data .= '</table>';
    echo $data;
}

///delete user record

if(isset($_POST['deleteid'])){
    $userid = $_POST['deleteid'];
    $deletequery = "DELETE FROM Student WHERE id = '$userid'";
    mysqli_query($conn, $deletequery);
}

///update user record

if(isset($_POST['id']) && isset($_POST['id']) != ""){
    $user_id = $_POST['id'];
    $query = "SELECT * FROM Student WHERE id = '$user_id'";
    if(!$result = mysqli_query($conn,$query)){
        exit(mysqli_error($conn));
    }
    
    $response = array();

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $response = $row;
        }
    }
    else
    {
       $response['status'] = 200;
       $response['message'] = "Data not found!"; 
    }

    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!"; 
}

///update table

if(isset($_POST['hidden_user_id'])){
    $hidden_user_id = $_POST['hidden_user_id'];
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
    
    $query = "UPDATE `Student` SET `firstname`='$firstname',`middlename`='$middlename',
            `lastname`='$lastname',`gender`='$gender',`address`='$address',`dob`='$dob',`email`='$email',
            `phno`='$phno',`rollno`='$rollno',`course`='$course',`sem`='$sem',`hblock`='$hblock',
            `roomno`='$roomno',`status`='$status' WHERE `id` = '$hidden_user_id'";
    mysqli_query($conn,$query);
}
?>