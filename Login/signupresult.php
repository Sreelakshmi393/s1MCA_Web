<?php
include 'conn.php';
if($_POST){
    $username=$_POST['uname'];
    $password=$_POST['upass'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    if($conn){
        $rq="insert into accounts values('$username','$password','$fname','$lname')";
        $rs=mysqli_query($conn,$rq);
        if($rs){
            $res="Login Successful";
        }
    }
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <center>
            <h2>
                <?php
                echo "$res"
                ?></h2>
                <a href="signup.php">Go to Login page</a>
        </center>
    </body>
</html>