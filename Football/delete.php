<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Delete player</title>
    <style>
        th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    body{
        background: powderblue;
    }
    </style>
</head>
<body>
    <center><h1>REMOVE PLAYER</h1></center>
    <form method='POST' action="">
        <center><table class="mytable" border=2px>
            <tr>
                <td><center>Name </center></td>
                <td><select class="myselect" name='pname'>
                    <option>SELECT</option>
                    <?php
                    $q = "SELECT name FROM players";
                    $s = mysqli_query($conn,$q);
                    if($q){
                        if(mysqli_num_rows($s)>0){
                            while($row=mysqli_fetch_assoc($s)){
                                echo "<option>".$row['name']."</option>";
                            }
                        }
                    }
                    ?>
                </select>
                </td>
            </tr>
            <tr>
            <td colspan=2><center><input class="mybutton" type='submit' name='submit' value='DELETE' onmouseover="enlargeText(this)" onmouseout="resizeText(this)"></center></td>
            </tr>
        </table></center>
    </form>
    <center><a href="links.php" style="text-decoration: none">BACK</a></center>
    <br><br>
    <center><a href="login.php" style="text-decoration: none">LOGOUT</a></center>
    <script>
        function enlargeText(element){
            element.style.fontSize="20px";
        }

        function resizeText(element){
            element.style.fontSize="12px";
        }
        </script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['pname'];
    $sq = "DELETE FROM players where name='$name'";
    $e = mysqli_query($conn, $sq);
    if($e){
        echo "<script>alert('PLAYER REMOVED')</script>";
    }else{
        echo "<script>alert('PROCESS FAILED')</script>";
    }
}
?>