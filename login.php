<html>
    <head>
        <title></title>
    <head>
    <body>
        <form action="" method="POST">
            Enter User Name: <input type="text" name="uname">
            Password: <input type="password" name="pswd">
            <input type="submit" name="submit" value="login">
        </form>
    </body>
<html>
<?php
if(isset($_POST['submit']))
{
    $conn=mysqli_connect('localhost','root','','student');
    $user=$_POST['username'];
    $password=$_POST['password'];
    $sql= "select * from login when Username='$user' and Password='$password'";
    $data=mysqli_query($conn,$sql);
    if(mysqli_num_rows($data))
    {
        echo "<script>alert('Success');</script>";

    }
    else{
        echo "failed";
    }
}
?>
