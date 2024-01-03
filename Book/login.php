<?php
    include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center><h1>LOGIN</h1></center>
    <form method="POST" action="">
    <center><table border=2px>
    <tr>
    <td>Username :</td>
    <td><input type="text" name="uname"></td>
    </tr>
    <tr>
    <td>Password :</td>
    <td><input type="password" name="pass"></td>
    </tr>
    <tr>
    <td colspan=2><center><input type="submit" name="submit" value="submit"></center></td>
    </table></center>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$name=$_POST['uname'];
$password=$_POST['pass'];
$q="SELECT * FROM login where username='$name' and password='$password'";
$s=mysqli_query($conn,$q);
if(mysqli_num_rows($s)){
    header("location: links.php");
    //echo "login success";
}else{
    echo "login failed";
}
}
?>