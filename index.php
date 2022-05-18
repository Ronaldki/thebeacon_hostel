<!DOCTYPE html>
<html>
<head>
	<title>Beacon Hostel</title>
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/js/bootstrap.min.js">
	<link rel="shortcut icon" type="icon/x-image" href="images/log.png">
	<link rel="stylesheet" type="text/css" href="style/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/w3schools.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<style type="text/css">
	.icons{
		justify-content: space-around;
		margin-top: 5px;
		background-color:#3a5caa;
		padding: 5px;
		width:100%;
	}
    .carousel-item{
        height: 34rem;
    }
    .fa{
		color:white;
	}
	.icon1 i{
		padding:5px;
	}
	.major{
		border-bottom:1px solid black;
		box-shadow:1px 1px 20px 1px;
		top:0px;
		left:0px;
		background-color: white;
	}
	a:hover{
		text-decoration:none;
	}
  .nav1 a{
		margin-left:20px;
		color:white;
	}
	/*.nav1{
		padding-top:10px;
	}*/
	footer{
		background-color:#3a5caa;
	}
    .text{
        
    }
    .roomslide{
        padding:0 4rem;
        margin-bottom: 2rem;
    }
    .main-header{
        height:5vh;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        text-align:center;
        padding:2rem;

    }
    .roomslide h3{
        font-size: 2rem;
        margin-bottom: 2rem;
        line-height: 1.2;

    }
    .roomslide p{
        width:100%;
    }
    .roomslide .card{
        padding: 1rem;
        margin: 2rem;
    
    }
    .roomslide img{
        height: 400px;
    }
</style>
<body>
<div class="main">
 <div class="major  sticky-top">
            <!-- navbar-->
            <div class="icons d-flex">
                <div class="nav1">
                  
                    <a href="https://student.lirauni.ac.ug">Student portal</a>
                    <a href="https://lirauni.ac.ug">Lirauniversity website</a>
                </div>
                <div class="icon1">
                 <i class="fa fa-facebook"></i>
                    <i class="fa fa-whatsapp"></i>
                    <i class="fa fa-envelope"></i>
                    <i class="fa fa-phone"></i>
                </div>
            </div>
            <!-- narbar -->
            <div class="navbar navbar-expand-md  navbar-light  ">
                <div class="container-fluid">
                    <div>
                        <div class="d-flex">
                            <img src="images/beacon log.png" style="max-width:100%;border-radius: 100%;height:90px;">

                            <div style="margin-top:20px;margin-left:5px;font-size:14px;">
                                <h5>Beacon Hostels</h5>
                                <p> comfort estates</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggler btn btn-success " data-toggle="collapse"
                        data-target="#navbarResponsive">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse text-right " id="navbarResponsive">

                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item active">
                                <a href="index.php" class="w3-btn btn nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="w3-btn btn nav-link">News</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="w3-btn btn nav-link">Book hostel</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              More Details
                              </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Portal</a>
                                <a class="dropdown-item" href="#">News</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Our patterns</a>
                            </div>
                            </li>
                            <li class="nav-item">
                                <a href="#"><input type="text" class=" form-control" name="search"
                                        placeholder="Search hostel">
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>

            </div>
        </div>
	<!--sliders-->
	<!-- body scetion -->
    <div class="container-fluid expand-md">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class=" img-fluid" style="height: auto; width: auto;" src="images/11.jpg" alt="First slide">
		            <div class="carousel-caption text"> 
					<h3 class="display-2">Secure Your Hostel </h3>
					<button type="button" class="btn btn-outline-light btn-lg">Get Hostel</button>
					<br><br><br><br>
			 </div>
			</div>
			<div class="carousel-item">
				<img class=" w-100 img-fluid"style="height: auto; width: auto;" src="images/8.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class=" w-100 img-fluid" style="height: auto; width: auto;"src="images/41.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
		</div>
                  <!--       middle section -->
                    <div class="container-fluid padding">
       <div class=" row welcome text-center"> 
            <div class="col-12">
                <h2 class="display-5">Beacon Hostel <br> Team welcomes You </h2>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">
                    lit. Dolores fugit distinctio molestias repudiandae,<br>
                    nulla, eligendi reprehenderit eaque quisquam quam
                    deserunt <br> temporibus explicabo ut sunt ipsam quos quod
                </p>
            </div>
       </div>
   </div>
   <!--Three div section-->
   <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-twitter"></i>
                <h3>Info</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    <br>yyjdosduhidutujiefdl hyiueianl.
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-home"></i>
                <h3>Our Aims</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br>
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-users"></i>
                <h3>Services</h3>
                <ul style="list-style-type:none;">
                <b>
                  <li>Online Booking</li>
                  <li>Advertisement</li>
                  <li>Designing Documents</li>
                  <!-- <li></li> -->
                </b>  
                </ul>
            </div>
        </div>
   </div>
  
   <!--Fixed back ground-->

   
   <!--Our Group-->
   <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h3 class="display-4">Sample Hostels</h3>
            </div>
            <hr>
        </div>
   </div>
   <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/gettyimages-936399612-612x612.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">St Peter's</h3>
                        <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing 
                            elit. Harum nihil nostrum assumenda non ut accusamus
                            autem aut necessitatibus ducimus voluptas.
                        </p>
                        <a class="btn btn-outline-secondary" href="#">see profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/gettyimages-1065524354-612x612.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Maisha</h3>
                        <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Harum nihil nostrum assumenda non ut accusamus
                            autem aut necessitatibus ducimus voluptas.
                        </p>
                        <a class="btn btn-outline-secondary" href="#">see profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/gettyimages-1065524354-612x612.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Maisha</h3>
                        <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Harum nihil nostrum assumenda non ut accusamus
                            autem aut necessitatibus ducimus voluptas.
                        </p>
                        <a class="btn btn-outline-secondary" href="#">see profile</a>
                    </div>
                </div>
            </div>
          	  <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/gettyimages-1065524354-612x612.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Bako</h3>
                        <p class="card-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Harum nihil nostrum assumenda non ut accusamus
                            autem aut necessitatibus ducimus voluptas.
                        </p>
                        <a class="btn btn-outline-secondary" href="#">see profile</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!--Two column section-->
   <br>
   <div class="container-fluid padding">
       <div class="row padding">
            <div class="col-md-12 col-lg-6">
                <h2>All hostels</h2>
                <p>
                    Check here to get your favarite hostel
                </p>
                <p>
                    Side selection that displays all the hostels.....
                </p>
                <br>
            </div>
            <div class="col-lg-6" >
                 <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="300" id="gmap_canvas" src="https://maps.google.com/maps?ll=2.2509766,32.8210473&q=Lira University&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>undefined<a href="undefined">undefined</a>undefined</div><style>.mapouter{position:relative;text-align:right;height:280px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:280px;width:600px;}</style>
             </div>
            </div>
       </div>
       <hr class="my-4">
   </div>
   <!--Connect -->
   <div class="container-fluid padding">

   </div>
   <div class="roomslide">
        <header class="main-header">Sample Rooms</header>      
        <section class="card">
            <img src="images/8.jpg" alt="Our Rooms">
            <h3>Enjoy Your Hostel</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa incidunt error ea? Tenetur praesentium, ducimus eum molestiae ut nobis voluptatem</p>
            <a href="#" class="btn">Book Now</a>
        </section>       
    </div>
  
	<!-- Our Footer -->
	<footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <hr style="border: 1px solid black;">
                        <h3>Follow us</h3>
                        <hr style="border: 1px solid black;">
                        <div class="icon">

                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-envelope-open"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                        </div>


                    </div>
                    <div class="col-md-4">
                        <hr style="border: 1px solid black;">
                        <h3>Address</h3>
                        <hr style="border: 1px solid black;">
                        <i class="fa fa-map-marker"></i> &nbsp;&nbsp;&nbsp; Lira university<br>
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;lirauni.ac.ug@yahoo.com


                    </div>
                    <div class="col-md-4">
                        <hr style="border: 1px solid black;">
                        <h3>Comment</h3>
                        <hr style="border: 1px solid black;">
                        <div>
                            <label>Write your comment</label><br>
                            <textarea placeholder="Your comment" class="form-control"></textarea><br>
                            <input type="submit" name="submit" class="btn btn-success">
                        </div>
                    </div>
                </div>
        </footer>
</div>
<div>
	
</body>
</html>


