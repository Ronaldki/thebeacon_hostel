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

 
