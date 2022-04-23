
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<style>
form{
    width:50%;
    /* padding-top:20px !important; */
    margin: 30px 0 0 70px;
    border: 1px solid;
    /* box-shadow: 1 .2 3 1; */
      /* background-color: rgb(6, 5, 31); */
}
form .modal-content{
    padding: 5px;
}
form .modal-content .close{
    margin-left:90%;
    /* color:red; */
    color:white;
    font-size:30;
    background-color:black;
    text-align:center;
    border-radius:5px;
}
.modal-content .close:hover{
    cursor: pointer;
    color:red;
}

form .modal-content .fontuser{
    padding-top:2px;
}
form .modal-content .fontuser label{
        color: #1d1b71;
}

form .modal-content .fontuser input{
    width:60%
}
</style>
</head>
    <div class="container">
        <h3 style="text-align:center;">Add New Hostel</h3>
        <form action="" method="post" class="form">
            <div class="modal-content">
                    <span class="close" id="cls">X</span>
                <div class="fontuser form-group">
                    <label><b>Hostel Name</b></label>
                    <br>
                    <input type="text"
                    placeholder="Enter Hostel Name"
                    name="hostename" class="form-control" required>
                </div>
                <div class="fontuser form-group">
                    <label><b>Owner Name</b></label>
                    <br>
                    <input type="text"
                        placeholder="Enter Owner Name"
                        name="ownername" class="form-control" required>
                </div>
                
                <div class="fontuser form-group">
                    <label><b>Owner Number</b></label>
                    <br>
                    <input type="text"
                            placeholder="Owner Number"
                            name="number" class="form-control" required>
                </div>	
                <div class="fontuser form-group">
                    <label><b>Location</b></label>
                    <br>
                    <input type="text"
                            placeholder="Hostel location"
                            name="location" class="form-control" required>
                </div>	
                <div class="fontuser form-group">
                    <label><b>Rooms Available</b></label>
                    <br>
                    <input type="text"
                            placeholder="Owner Number"
                            name="rooms" class="form-control" required>
                </div>	
                <br>
                <div class="form-group fontuser ">
                    <select name="status" id="status" class="form-group" required>
                        <option value=""></option>
                        <option value="Single" name="status" class="form-control">Single</option>
                        <option value="Mixed" name="status" class="form-control">Mixed</option>
                    </select>
                </div>
                <br>
                <div class="fontuser form-group">
                    <label><b>Front Image</b></label>
                    <br>
                    <input type="file"
                        placeholder="Choose image"
                        name="hostimage" class="form-control" required>
                </div>
                <div class="fontuser form-group">
                    <label><b> Back Image</b></label>
                    <br>
                    <input type="file"
                        placeholder="Back image"
                        name="backimage" class="form-control" required>
                </div>
                <div class="fontuser form-group">
                    <label><b>Sample Room</b></label>
                    <br>
                    <input type="file"
                        placeholder="Sample Room"
                        name="roomimage" class="form-control" required>
                </div>
                <br>
                <div class="form-group fontuser">
                     <button type="submit" id="" name="sub" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>            
    </div>
</html>