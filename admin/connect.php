<!-- All connection files -->
<?php
    include "../config/connection.php";

if(isset($_POST['sub'])){
    $fnane =$_POST['firstname'];
    $lnane =$_POST['lastname'];
    $password =$_POST['psw'];
    $role =$_POST['role'];


    // $image =$_POST['adminimg'];
    $image = $_POST['adminimg'];
    $tmp_name = $_POST['adminimg'];
    $storage = "uploads/" .$image;

    move_uploaded_file($tmp_name, $storage);


    if(move_uploaded_file($tmp_name, $storage)){
      echo 'Uploaded';
      
    }else{
      echo 'Error uploading file';
    }
 $count =6;
//  some validation here..........needed....
//  if($password >= $count){
  $sql = "INSERT INTO admin_tbl(fname, lname, admin_password, admin_role, admin_image) 
    VALUES('$fnane', '$lnane', '$password', '$role' , '$image')";

    $query = mysqli_query($con,$sql);

    if($query){
      header('location:main.php'); 
    }
    else{

      echo '<script type ="text/JavaScript">';  
      echo 'alert("Data Not Inserted")';  
      echo '</script>'; 
    }
//  } else{
//   echo '<script type ="text/JavaScript">';  
//       echo 'alert("Password should be more than 6 characters")';  
//       echo '</script>'; 
//  }

 }
// Addd hostels Validations here.................



// if(isset($_POST['send'])){
//     $hname = $_POST['hostname'];
//     $ownname = $_POST['ownername'];
//     $ownnuber = $_POST['number'];
//     $hlocation = $_POST['location'];
//     $roomsavail = $_POST['rooms'];
//     $status = $_POST['status'];
//     $hostimg = $_POST['hostimage'];
//     $backimg = $_POST['backimage'];
//     $roomimg = $_POST['roomimage'];


//     $qry = "INSERT INTO hostel_tbl(hostel_name, owner_name,owner_number,hostel_location, rooms_available, mixed_or_single, hostel_picture, sample_image,back_image) VALUES('$hname', '$ownname', '$ownnuber', '$hlocation', '$roomsavail', '$status','$hostimg', '$backimg','$roomimg')";

//         $rs = mysqli_query($con,$qry);
//         if($rs){
//             header('location:main.php'); 
//         }
//         else{
//             echo '<script type = "text/JavaScript">';
//             echo 'alert("Data Not Insertd")';
//             echo '</script>';
//         }

// }
?>
<?php
//  include "config/connection.php";
$con = mysqli_connect('localhost','root', '', 'beacon_db');

if($con){
}else{
    echo 'Not Connected to database';
}

if(isset($_POST['send'])){

    $host = $_POST['hostname'];
    $name = $_POST['ownername'];
    $num =  $_POST['number'];
    $location = $_POST['location'];
    $room = $_POST['rooms'];
    $status = $_POST['status'];
    $hostimage = $_POST['hostimage'];
    $roomsample = $_POST['roomimage'];
    $back = $_POST['backimage'];


    $query = "INSERT INTO hostel_tbl(hostel_name,owner_name,owner_number,hostel_location,rooms_available,mixed_or_single,hostel_picture,sample_image,back_image) VALUES('$host', '$name','$num','$location','$room','$status','$hostimage','$roomsample','$back') ";

    $results= mysqli_query($con,$query);
    
    if($results){
     header("location:main.php");
    }
    else{
        echo 'Nothing is inserted';
    }
}

?>
