<?php
 include "../config/connection.php";

 if(isset($_POST['sub'])){
    $fnane =$_POST['firstname'];
    $lnane =$_POST['lastname'];
    $password =$_POST['psw'];
    $role =$_POST['role'];


    // $image =$_POST['adminimg'];
    $image = $_FILES['adminimg'];
    $tmp_name = $_FILES['adminimg'];
    $storage = "uploads/" .$image;

    move_uploaded_file($image, $storage);


    if(move_uploaded_file($image, $storage)){
      echo 'Uploaded';
      
    }else{
      echo 'Error uploading file';
    }
 $count =6;
//  some validation here..........needed....
 if($password >= $count){
  $sql = "INSERT INTO admin_tbl(fname, lname, admin_password, admin_role, admin_image) 
    VALUES('$fnane', '$lnane', '$password', '$role' , '$image')";

    $query = mysqli_query($con,$sql);

    if($query){
      header('location:sign.php'); 
    }
    else{

      echo '<script type ="text/JavaScript">';  
      echo 'alert("Data Not Inserted")';  
      echo '</script>'; 
    }
 } else{
  echo '<script type ="text/JavaScript">';  
      echo 'alert("Password should be more than 6 characters")';  
      echo '</script>'; 
 }
    

 }


?>
<!DOCTYPE html>
<html class="">

<head>
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<style>
	
    form{
            width: 50%;
            /* background: #1d1b31; */
            padding-left: 25%;
            padding-top: 3%;
        }

       
		/* Assign full width inputs*/
		input[type=text],
		input[type=password] {
			width: 50%;
			padding: 12px 40px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		
		/* Set a style for the buttons*/
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
		}

		/* Set a hover effect for the button*/
		button:hover {
			opacity: 0.8;
		}

		/* Set extra style for the cancel button*/
		.container {
			padding: 16px;
		}
	
		.fontuser {
			position: relative;
		}
		
		.fontuser i{
			position: absolute;
			left: 15px;
			top: 40px;
			color: gray;
		}
		
		.fontpassword {
			position: relative;
		}
		
		.fontpassword i{
			position: absolute;
			left: 15px;
			top: 40px;
			color: gray;
		}
        /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
	</style>
</head>

<body>
<button type="" id="myBtn">Register Admin</button>
	<div class="container modal" id="myModal">
 <form action="" method="post" class="" >
            <div class="modal-content">
                <span class="close">&times;</span>
              <div class="fontuser">
                <label><b>FirstName</b></label>
                <br>
                <input type="text"
                        placeholder="Enter FisrtName"
                        name="firstname" required>
                <i class="fa fa-user fa-lg"></i>
            </div>
            <div class="fontuser">
                <label><b>LastName</b></label>
                <br>
                <input type="text"
                        placeholder="Enter LastName"
                        name="lastname" required>
                <i class="fa fa-user fa-lg"></i>
            </div>
            
            <div class="fontpassword">
                <label><b>Password</b></label>
                <br>
                <input type="password"
                        placeholder="Enter Password"
                        name="psw" required>
                <i class="fa fa-key fa-lg"></i>
            </div>	
            <div>
                <select name="role" id="" required>
                    <option value="">Super Admin</option>
                    <option value="">Admin</option>
                </select>
            </div>
            <br>
            <div class="fontuser">
                <label><b>Image</b></label>
                <br>
                <input type="file"
                        placeholder="Choose image"
                        name="adminimg" required>
            </div>
        
            <button type="submit" id="" name="sub">Register</button>
            <br>

            <input type="checkbox" checked="checked">
                 Remember me 
            </div>
        </form>            
	</div>

    <script>
        // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
</body>

</html>
