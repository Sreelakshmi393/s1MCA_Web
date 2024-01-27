<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td {
      padding: 10px;
      border: 1px solid #ddd; /* Optional: Add border for better visibility */
      text-align: left;
    }
    </style>
</head>
<body>
    <center><h1>AVAILABLE BOOKS</h1></center>
    <form method="POST" action="">
        <center><input type="submit" name="submit" value="SHOW AVILABLE BOOKS"></center>
    </form>
    <center><a href="login.php">LOGOUT</a></center>
    <br><br>
    <center><a href="links.php">PREVIOUS</a></center>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $sq = "SELECT * FROM book";
    $s = mysqli_query($conn, $sq);
    if($s){
        echo "<br><br>";
        if(mysqli_num_rows($s)){
            echo "<html><body><form><center><table border=2px>";
            while($row=mysqli_fetch_assoc($s)){
                echo "<tr><td>BOOKID</td>";
                echo "<td>".$row['bookid']."</td></tr>";
                echo "<tr><td>BOOK NAME</td>";
                echo "<td>".$row['bookname']."</td></tr>";
                echo "<tr><td>AUTHOR</td>";
                echo "<td>".$row['author']."</td></tr>";
                echo "<tr><td>COPIES</td>";
                echo "<td>".$row['copies']."</td></tr>";
            }
            echo "</table></center></form></body></html>";
        }
    }
}
?>