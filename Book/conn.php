<?php
$conn = mysqli_connect('localhost', 'root', '', 'student1');
if($conn){
    echo "Connection successfull";
}
else{
    echo "Connection failed";
}
?>