<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    body{
        background-image: url('https://img.freepik.com/free-vector/dynamic-gradient-football-background_23-2149007789.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .mybutton{
        background-color: skyblue;
        border: none;
        color: blue;
        padding: 15px 32px;
        text-align: center;
        font-size: 12px;
        border-radius: 8px;
    }

    .logintable{
        width: 50%;
        height: 50%;
    }
    </style>
</head>
<body>
    <center><h1>LOGIN</h1></center>
    <form method="POST" action="">
       <center> <table class="logintable" border="2px">
            <tr>
                <td><center>Username</center></td>
                <td><center><input type="text" name="uname"></center></td>
            </tr>
            <tr>
                <td><center>Password</center></td>
                <td><center><input type="password" name="pass"></center></td>
            </tr>
            <tr>
                <td><center>Re-enter Password</center></td>
                <td><center><input type="password" name="pass2"></center></td>
            </tr>
            <tr>
                <td  colspan=2><center><input class="mybutton" type="submit" value="LOGIN" name="submit" onmouseover="enlargeText(this)" onmouseout="resetSize(this)"></center></td>
            </tr>
        </table></center>
    </form>
    <script>
        function enlargeText(element){
            element.style.fontSize = "20px";
        }
        function resetSize(element){
            element.style.fontSize = "15px";
        }
    </script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['uname'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    if ($pass==$pass2){
    $sq = "SELECT * FROM ft_login WHERE username='$name' and password='$pass'";
    $q = mysqli_query($conn, $sq);
    if(mysqli_num_rows($q)){
        header('location:links.php');
    }
    else{
        echo "<script>alert('LOGIN FAILED')</script>";
    }
}else{
    echo "<script>alert('RECHECK PASSWORD')</script>";
}
}
?>
