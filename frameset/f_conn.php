<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn){
    echo "Connection Successful";
}
else{
    echo "Connection Failed";
}
$ktuid=$_POST['ktu_id'];
$rollno=$_POST['roll_no'];
$name=$_POST['name'];
$sem=$_POST['sem'];

$sq="INSERT into details values('$ktuid','$rollno','$name','$sem')";
$p=mysqli_query($conn,$sq);
if($p){
    echo "<script>
    alert('Welcome " .$name. ", You are successfully signed in');
    </script>";
}
else{
    echo "<script>
    alert('Insertion failed');
    </script>";
}
?>