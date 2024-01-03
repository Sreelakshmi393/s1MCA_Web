<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>DELETE BOOK DETAILS HERE</h1><center>
    <form method='POST' action="">
        <table border=2px>
            <tr>
                <td>BOOKID</td>
                <td><select name='bid'>
                   <option>SELECT OPTION</option>
                   <?php
                   $sq = "SELECT bookid FROM book";
                   $q =mysqli_query($conn, $sq);
                   if($q){
                        if(mysqli_num_rows($q)>0){
                            while($row=mysqli_fetch_assoc($q)){
                                echo "<option>".$row[bookid]."</option>";
                            }
                        }
                    }
                    ?></select>
                 </td>
            </tr>
            <tr>
                <td colspan=2><center><input type="submit" name="submit" value="submit"></center></td>
            </tr>
        </table>
    </form>  
    <center><a href="login.php">LOGOUT</a></center>
    <br><br>
    <center><a href="links.php">PREVIOUS</a></center>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$book_id = $_POST['bid'];
$p = "DELETE FROM book where bookid='$book_id'";
$s = mysqli_query($conn, $p);
if($s){
    echo "<script>alert('DELETION SUCCESSFULL')</script>";
}
else{
    echo "<script>alert('DELETION FAILED')</script>";
}
}
?>