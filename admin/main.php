
<?php
include('connect.php');
// all connections in connect.php....

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Side</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="style.css">


</head>
    <body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="log">
                <i class='bx bxl-messenger'></i>
                <div class="logo_name">Admin </div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
            
                    <i class="bx bx-search"></i>
                    <input type="text" placeholder="Search....">
               <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="#" id="home">
                    <i class='bx bxs-building-house'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message-rounded-dots'></i>
                    <span class="links_name">Message</span>
                </a>
                <span class="tooltip">Message</span>
            </li>
            <li>
                <a href="#" id="hostels">
                    <i class='bx bxs-folder-plus'></i> 
                    <span class="links_name">Add Hostels</span>
                </a>
                <span class="tooltip">Hostels</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-building-house'></i>
                    <span class="links_name">Bookings</span>
                </a>
                <span class="tooltip">Bookings</span>
            </li>
            <li>
                <a href="#" id="rooms">
                    <i class='bx bx-building-house'></i>
                    <span class="links_name">NewRoom</span>
                </a>
                <span class="tooltip">Add Room</span>
            </li>
            <li>
                <!-- All settings here...... -->
                <a href="#" id="settings">
                    <i class='bx bx-cog'></i>                    
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <!-- admin image.... -->
                    <img src="uploads/IMG_8696.JPG  " alt="Admin_log">
                    <div class="name_job">
                        <div class="name">Manager</div>
                        <div class="job">Engineer</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out">Exit</i>
            </div>
        </div>
    </div>  
      <div class="home_content ">
          <div class="text " >
              <!-- loading other pages here......... -->

          </div>
             
       </div>


      <script>
          let btn = document.querySelector("#btn");
          let sidebar = document.querySelector(".sidebar");
          let Searchbtn = document.querySelector(".bx-search");

          btn.onclick = function(){
                sidebar.classList.toggle("active");
          }
           
          Searchbtn.onclick = function(){
                sidebar.classList.toggle("active");
          }

          $(document).ready(function() {
                //the default page load here........
              $(".text").load("home.php"); 
              $('#home').click(function(){
                    $('.text').load('home.php');
              });
             $("#hostels").click(function(){
                $(".text").load("hostels/addhostel.php");           
             }); 
             $('#rooms').click(function(){
                $('.text').load("hostels/addroom.php");
             });

            //  $("#add").click(function(){
            //     $("#add").css({"color":"white","text-decoration":"none"});
            //     $(".frame").load("register.php");
            // });
            $('#settings').click(function(){
                $('.text').load('sign.php');
            });
          });

</script>
    </body>
</html>