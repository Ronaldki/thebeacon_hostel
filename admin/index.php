<?php
session_start();
	 include "../config/connection.php";
	 
	 if(isset($_POST['log'])){

		$name = $_POST['uname'];
		$password = $_POST['psw'];

		$query = "SELECT * FROM admin_tbl WHERE fname = '$name'  AND admin_password='$password' LIMIT 1";
		
		$rslt = mysqli_query($con, $query);
		if(mysqli_num_rows($rslt)>0){
			echo '<script type ="text/JavaScript">';  
			echo 'alert("Logged In")';  
			echo '</script>'; 
			header('location:main.php');
		}
		else{
			echo '<script type ="text/JavaScript">';  
			echo 'alert("Access Denied \n Try consulting Super Admin. ")';  
			echo '</script>';
		}
	 }

?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	
    form{
            width: 50%;
            /* background: #1d1b31; */
            padding-left: 25%;
            padding-top: 10%;
        }

        body{
            background: #1d1b31;
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
			border-radius:15px;
		}
		
		/* Set a style for the buttons*/
		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 15%;
			border-radius:15px;
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
		h4{
			color: #fff;
			text-align:center;
		}
	</style>
</head>

<body>
	<div class="container">
        <form action="" method = "post">
		<h4 style="text-center">Admin Login</h4>
        
            <div class="fontuser">
                <label><b style="color: #fff;">Username</b></label>
                <br>
                <input type="text"
                        placeholder="Enter Username"
                        name="uname" required>
                <i class="fa fa-user fa-lg"></i>
            </div>
            
            <div class="fontpassword">
                <label><b style="color: #fff;">Password</b></label>
                <br>
                <input type="password"
                        placeholder="Enter Password"
                        name="psw" required>
                <i class="fa fa-key fa-lg"></i>
            </div>	
            <br>

            <button type="submit" name="log">Login</button>
            <br>

            <input type="checkbox" name= "remember" > 
			<!--    checked="checked" up -->
                   <span style="color: #fff;">Remember me</span> 
        </form>            
	</div>
</body>

</html>
