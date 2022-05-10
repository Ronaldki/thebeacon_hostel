
<?php

$con = mysqli_connect('localhost','root', '', 'beacon_db');
if(isset($_POST['send'])){
    $decs= $_POST['roomdesc'];
    $roomp= $_POST['roomprice'];
    $roomname = $_POST['roomname'];
    $sts = $_POST['hostelname'];
    $s = $_POST['st'];
    $q =" SELECT * FROM hostel_tbl WHERE hostel_name = '$sts' ";
    $dat =mysqli_query($con, $q);
    if(mysqli_num_rows($dat)>0){
        $tr = [];

        while($row = mysqli_fetch_assoc($dat)){
            $tr=  $row['hostel_id'];
            // echo $tr;
            // $final = array_push( $tr, $row['hostel_id'] );

        }
        // echo $tr;
        // echo $tr;
        // echo $final;
        $qr= "INSERT INTO room_tbl(descriptions,hostel_id,room_name,fees,status_booked_or_not) VALUES ('$decs','$tr','$roomname','$roomp', '$s')";
        $rs= mysqli_query($con, $qr);
    
        if($rs){
            header('location:addhostel.php');
    
        }else{
            echo 'Data not inserted';
        }
    }
    

}
?>
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
        <h3 style="text-align:center;">Add Room</h3>
        <form action="" method="POST" class="form">
            <div class="modal-content">
                <span class="close" id="btncls">X</span>
                <div class="row">
                    <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b>Description</b></label>
                            <input type="text"
                            placeholder="Room Description"
                            name="roomdesc" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                            <div class="fontuser form-group">
                                <label><b>Room Name</b></label>
                                <input type="text"
                                placeholder="Enter Room Name"
                                name="roomname" class="form-control" required>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="fontuser form-group">
                            <label><b>Price</b></label>
                            <input type="text"
                            placeholder="Price"
                            name="roomprice" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group fontuser ">                         
                            
                    <?php
                                $conn = mysqli_connect('localhost','root', '', 'beacon_db');
                                $sel =" SELECT * FROM hostel_tbl";
                                $sel2 = mysqli_query($conn, $sel);

                                ?>
                            <select name="hostelname" id="hostelname" class="form-group" required>
                               
                                <?php
                                while($ro = mysqli_fetch_assoc($sel2)){
                                ?>
                                    <option value="<?php echo $ro['hostel_name']; ?>" name="hostelname" class="form-control"> <?php echo $ro['hostel_name']; ?></option>
                                    
                                <?php
                                }
                                ?>
                                <!-- <option value="Maisha" name="" class="form-control">Maisha</option>
                                <option value="Mk" name="" class="form-control">Mk</option> -->

                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group fontuser ">
                            <select name="st" id="hostelnam" class="form-group" required>
                                <!-- <option value=""></option> -->
                                <option value="Booked" name="" class="form-control">Booked</option>
                                <option value="Not Booked" name="" class="form-control">Not Booked</option>
                            </select>
                        </div>
                    </div>
                      <div class="form-group fontuser">
                            <button type="submit" id="" name="send" class="btn btn-primary">Register</button>
                      </div>
            </div>
        </form>            
    </div>
    <script>

    $(document).ready(function(){
        $('#btncls').click(function(){
            $('.mycontent').hide();
        });
    });
    </script>
</html>