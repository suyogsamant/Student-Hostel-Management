<?php
include 'config.php';

if(isset($_POST['readrecord'])){
    $data = '<table class="table table-bordered table-striped table-sm" width="100%">
                <tr style="font-height:700">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone No</th>
                    <th>Date</th>
                    <th>Entry time</th>
                    <th>Exit Time</th>
                    <th>Student Roll No</th>
                    <th>Edit Field</th>
                    <th>Delete Field</th>
                </tr>';
    $displayquery = "SELECT * FROM Visitor ORDER BY id ASC";
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
                <td>' . $row["phno"] . '</td>
                <td>' . $row["date"] . '</td>
                <td>' . $row["entime"] . '</td>
                <td>' . $row["extime"] . '</td>
                <td>' . $row["srollno"] . '</td>
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
    $deletequery = "DELETE FROM Visitor WHERE id = '$userid'";
    mysqli_query($conn, $deletequery);
}

///update user record

if(isset($_POST['id']) && isset($_POST['id']) != ""){
    $user_id = $_POST['id'];
    $query = "SELECT * FROM Visitor WHERE id = '$user_id'";
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
    $phno = $_POST['phno'];
    $date = $_POST['date'];
    $entime = $_POST['entime'];
    $extime = $_POST['extime'];
    $srollno = $_POST['srollno'];
    
    $query = "UPDATE `visitor` SET `firstname`='$firstname',`middlename`='$middlename',
            `lastname`='$lastname',`gender`='$gender',`address`='$address',`phno`='$phno',
            `date`='$date',`entime`='$entime',`extime`='$extime',`srollno`='$srollno' WHERE `id` = '$hidden_user_id'";
    mysqli_query($conn,$query);
}
?>