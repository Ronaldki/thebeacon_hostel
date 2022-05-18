<?php
 include "../config/connection.php";


?>
<!DOCTYPE html>
<html class="">

<head>
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<style>
	
    form{
            width: 80%;
            /* background: #1d1b31; */
            padding-left: 10%;
            padding-top: 0%;
            position:absolute;
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
.modalf {
  /* display: none; */
   /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  margin-top: 0px !important;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%; 
}




   .close{
     margin-left:95%;
     cursor: pointer;
     color:red; 
     font-size: 28px;
    font-weight: bold;
    background-color:black;
    text-align:center;
    padding:5px;
    border-radius:5px;

   }

.regbtn{
width: 30%;
margin-left:10%
}

</style>
</head>

<body>
<!-- <button type="button" class="regbtn" id="myBtn">Register Admin</button> -->
<br>
<!-- <button type="button" class="regbtn" id="myBtn"><a href="hostels/addhostel.php">Add New Hostel</a> </button> -->
 <!-- modal register new admin -->
	<div class="container modalf" id="myModal">
 <form action="" method="post" class="">
            <div class="modal-content">
                <span class="close" id="cls">X</span>
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
                <select name="role" id="role" required>
                    <option value="0" name="role">Super Admin</option>
                    <option value="1" name="role">Admin</option>
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

            </div>
        </form>            
	</div>
  <!-- modal register new admin -->

  <!-- modal addhostel................ -->



























  <script>

    
     $(document).ready(function(){
    //   $('#myBtn').click(function(){
    //     $('.modalf').show();
    //   });

      $('#cls').click(function(){
        $('.modalf').hide();

      });

    });



  </script>
    <!-- <script>
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
    </script> -->
</body>

</html>
