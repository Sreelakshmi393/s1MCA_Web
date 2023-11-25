<?php 
include 'conn.php';
if($_POST){
    $name=$_POST['uname'];
    $pass=$_POST['upass'];
    if($con){
        $sq="select * from accounts where username='$name' and password='$pass'";
        $q=mysqli_query($con,$sq);
        if(mysqli_num_rows($q)){
            $row=mysqli_fetch_assoc($q);
            echo "Login successful";
    }
    else{
        echo "Account not detected";
        echo "<a href='signup.php'>Signup</a>";
    }
}
}
?>