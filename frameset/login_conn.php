<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn){
    echo "Connection Successful";
}
else{
    echo "Connection Failed";
}
if($_POST)
{
    if(isset($_POST["uname"]))
    {
        $username=$_POST["uname"];
        $password=$_POST["upass"];
        $s="SELECT * from details where name='$username' and password='$password'";
        $q=mysqli_query($conn, $s);
        if(mysqli_num_rows($q)== 1){
            header("Location:");
        }
        else{
            echo "Login failed";
        }
    }
    else{
        echo "No username received";
    }
}
else{
    echo "No data receivd";
}
?>