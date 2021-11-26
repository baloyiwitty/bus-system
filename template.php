<?php
//include 'student/header_sess.php';

$conn= new mysqli('localhost','root','','student');
if($conn->connect_error){
    die('connection error ;' .$conn->connect_error);
}
else{
    echo"TUT Student Creditials";
}


?>



 <form action="template.php" method="post" enctype="multipart/form-data">

<div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"></i></span>
                            <input type="text" placeholder="studentNo" name="studentNo" value="" required>
                            <br>
                      
                        </div>
                    </div>
                </div>
                
            
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"></i></span>
                            <input type="text" placeholder="campusName" name="campusName" value="" required>
                            <br>
                      
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"></i></span>
                            <input type="text" placeholder="departureTime" name="departureTime" value="" required>
                            <br>
                      
                        </div>
                    </div>
                </div>


  

    <input type="submit" name="Submit" value="Submit" class="btn btn-success ml -3">
</form>



</body>

</html>