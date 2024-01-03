<?php
    include 'conn.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <form method="POST" action="">
        <table border=2px>
            <tr>
                <td>BOOKID</td>
                <td><input type="text" name="bookid"></td>
            </tr>
            <tr>
                <td>BOOKNAME</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>AUTHOR</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>No OF COPIES</td>
                <td><select name="copy">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="submit" name="submit" value="submit"><center></td>
            </tr>
        </table>
    </center>
    <center><a href="login.php">LOGOUT</a></center>
    <br><br>
    <center><a href="links.php">PREVIOUS</a></center>

</body>
</html>

<?php
if(isset($_POST['submit'])){
    $bid = $_POST['bookid'];
    $bname = $_POST['name'];
    $auth = $_POST['author'];
    $no = $_POST['copy'];
    $sq = "INSERT into book values('$bid', '$bname', '$auth', '$no')";
    $q=mysqli_query($conn, $sq);
    if($q){
        echo "<script>alert('Insertion successfull')</script>";
    }else{
        echo "<script>alert('Insertion failed')</script>";
    }
}
?>