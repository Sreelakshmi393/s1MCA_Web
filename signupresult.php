<?php
include 'conn.php';
if($_POST){
    $username=$_POST['rname'];
    $password=$_POST['rpass'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    if($con){
        $rq="insert into accounts values('','$username','$password','$fname','$lname')";
        $rs=mysqli_query($con,$rq);
        if($rs){
            $res="Account created";
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
                <a href="signin.php">Go to Login page</a>
        </center>
    </body>
</html>