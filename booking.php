
<?php
include 'connect.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <form action="booking.php" method= "POST">

        <div class="container">
            <header><h1>  booking form <h1></header>
            <img src='picture/bus.jpg'>
                        <br>
                  <br>
                        <div class="field">
                            <div class="label">Source Campus </div>
                            <select name="campus">
                                <option value="Pretoria">Pretoria Campus</option>
                                <option value="Arcadi">Arcadi Campus</option>
                                <option value="Arts">Arts Campus</option>
                                <option value="Soshanguve South">Soshanguve South Campus</option>
                                <option value="Soshanguve North">Soshanguve North Campus</option>
                                <option  value="Ga-Rankua">Ga-Rankua Campus</option>
                                <option>OTHER</option>
                            </select>
                        </div>
                  <br>
                  <br>
                        <div class="form-group mb-3">
                        <label for="">Departure Time</label>
                        <input type="datetime-local"name="event_dt"class="form-control">

                    </div>
                    <br>
                  
                
                  <br>


                        <div class="field">
                            <div class="label">Destination Campus </div>
                            <select name="destination">
                                <option value="Pretoria">Pretoria Campus</option>
                                <option value="Arcadi">Arcadi Campus</option>
                                <option value="Arts">Arts Campus</option>
                                <option value="Soshanguve South">Soshanguve South Campus</option>
                                <option value="Soshanguve North">Soshanguve North Campus</option>
                                <option  value="Ga-Rankua">Ga-Rankua Campus</option>
                                <option>OTHER</option>
                            </select>
                            <br>
                  <br>
                    

                    <div class="form-group mb-3">
                    <button type="submit"name= "save_datetime"class="btn btn-primary">Save Event</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>




<?php
if(isset($_POST['save_datetime']))
{

$campus=$_POST['campus'];
$event=$_POST['event_dt'];
$icampus=$_POST['destination'];
$stud_number = 216761529;

$sql="INSERT INTO  booking (campus,eventDate,stud_number,Dcampus)VALUES ('$campus','$event','$stud_number','$icampus')";
if(mysqli_query($conn,$sql)){
  echo '<script type="text/javascript">alert("Succesfully Booked The Bus "); window.location = "student/index.php";</script>';
}else{
    $failed =" something went wrong";
}
}else{
$msz ="please select a video to upload";
}


?>