

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<style>
form{
    width:90%;
    /* padding-top:20px !important; */
    /* margin: 30px 0 0 70px; */
    border: 1px solid;
    /* position:absolute; */
    margin-left:2%;
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
    <div class="container mycontent">
        <h3 style="text-align:center;">Add New Hostel</h3>
        <form action="" method="post" class="card">
            <div class="modal-content">
                <span class="close" id="btncls">X</span>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
                    <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b>Hostel Name</b></label>
                            <input type="text"
                            placeholder="Enter Hostel Name"
                            name="hostname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                            <div class="fontuser form-group">
                                <label><b>Owner Name</b></label>
                                <input type="text"
                                placeholder="Enter Owner Name"
                                name="ownername" class="form-control" required>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b>Owner Number</b></label>
                            <input type="text"
                            placeholder="Owner Number"
                            name="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b>Location</b></label>
                            <input type="text"
                            placeholder="Hostel location"
                            name="location" class="form-control" required>
                         </div>	
                    </div>
                </div>
              	<div class="row">
                    <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b>Rooms Available</b></label>
                            <input type="text"
                            placeholder="Rooms"
                            name="rooms" class="form-control" required>
                        </div>	
                    </div>
                    <br>
                    <br>
                   <div class="col-6">
                        <div class="form-group fontuser ">
                            <select name="status" id="status" class="form-group" required>
                                <!-- <option value=""></option> -->
                                <option value="Single" name="status" class="form-control">Single</option>
                                <option value="Mixed" name="status" class="form-control">Mixed</option>
                            </select>
                        </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b>Front Image</b></label>
                            <input type="file"
                            placeholder="Choose image"
                            name="hostimage" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b> Back Image</b></label>
                            <input type="file"
                            placeholder="Back image"
                            name="backimage" class="form-control" required>
                        </div>
                    </div>
                </div>
               <div class="row">
                   <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b>Sample Room</b></label>
                            <br>
                            <input type="file"
                            placeholder="Sample Room"
                            name="roomimage" class="form-control" required>
                        </div>
                   </div>
                   <div class="col-6">
                        <div class="form-group fontuser">
                            <button type="submit" id="" name="send" class="btn btn-primary">Register</button>
                        </div>
                   </div>
               </div>
               
            </div>
        </form>            
    </div>

    <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
        <div class="col bg-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nihil culpa hic, quibusdam inventore iste odio aliquam necessitatibus corporis, autem dolorum quae tempore harum consequuntur animi quaerat modi, veritatis repellat.
        </div>
        <div class="col bg-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nihil culpa hic, quibusdam inventore iste odio aliquam necessitatibus corporis, autem dolorum quae tempore harum consequuntur animi quaerat modi, veritatis repellat.
        </div>
        <div class="col bg-success">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nihil culpa hic, quibusdam inventore iste odio aliquam necessitatibus corporis, autem dolorum quae tempore harum consequuntur animi quaerat modi, veritatis repellat.
        </div>
        <div class="col bg-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nihil culpa hic, quibusdam inventore iste odio aliquam necessitatibus corporis, autem dolorum quae tempore harum consequuntur animi quaerat modi, veritatis repellat.
        </div>
    </div> -->
    <script>

    $(document).ready(function(){
        $('#btncls').click(function(){
            $('.mycontent').hide();
        });
    });
    </script>
</html>