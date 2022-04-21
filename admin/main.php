
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Side</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

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
                <a href="#">
                    <i class='bx bx-building-house'></i>
                    <span class="links_name">Bookings</span>
                </a>
                <span class="tooltip">Bookings</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message-rounded-dots'></i>
                    <span class="links_name">Message</span>
                </a>
                <span class="tooltip">Message</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-folder-plus'></i> 
                    <span class="links_name">Roams</span>
                </a>
                <span class="tooltip">Rooms</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-building-house'></i>
                    <span class="links_name">Hostels</span>
                </a>
                <span class="tooltip">Hostels</span>
            </li>
            <li>
                <!-- All settings here...... -->
                <a href="sign.php" id="settings">
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
      <div class="home_content">
          <div class="text">Home content</div>
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
             $(".text").load("index.php");
             $("#settings").click(function(){
                $(".text").load("sign.php");
             }); 

            //  $("#add").click(function(){
            //     $("#add").css({"color":"white","text-decoration":"none"});
            //     $(".frame").load("register.php");
            // });
          });

</script>
    </body>
</html>