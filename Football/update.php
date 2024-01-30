<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UPDATE PLAYER</title>
    
</head>
<body>
    <center><h1>UPDATE PLAYER DETAILS</h1></center>
    <form method='POST' action="">
        <center><table class="mytable" border=2px>
            <tr>
                <td><center>Name </center></td>
                <td><select class="myselect" name="pname">
                <option>select</option>
                <?php
                $q = "SELECT name from players";
                $s = mysqli_query($conn, $q);
                if($s){
                    if(mysqli_num_rows($s)>0){
                        while($row=mysqli_fetch_assoc($s)){
                            echo "<option>".$row[name]."</option>";
                        }
                    }
                }
                ?>
                </select>
            </td>
            </tr>
            <tr>
                <td colspan=2>
                   <center> <input class="mybutton" type="submit" name="submit" value="UPDATE" onmouseover="enlargeText(this)" onmouseout="resizeText(this)"></center>
            </td>
            </tr>
            </table></center>
            </form>
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
$sq = "SELECT * from players where name='$name'";
$q = mysqli_query($conn,$sq);
if($q){
    if(mysqli_num_rows($q)){
        echo "<html><body><form method='POST' action=''>";
        while($row=mysqli_fetch_assoc($q)){
            echo "<center><table border=2px>";
            echo "<tr><td>Name </td><td><input type='text' name='pname' value=".$row['name']." readonly></td></tr>";
            echo "<tr><td>Jersy no </td><td><input type='text' name='jno' value=".$row['jersy_no']."></td></tr>";
            echo "<tr><td>Age </td><td><input type='text' name='age' value=".$row['age']."></td></tr>";
            echo "<tr><td>Height </td><td><input type='text' name='height' value=".$row['height']."></td></tr>";
            echo "<tr><td>Weight </td><td><input type='text' name='weight' value=".$row['weight']."></td></tr>";
            echo "<tr><td>Country </td><td><input type='text' name='country' value=".$row['country']."></td></tr>";
        }
        echo "<tr><td colspan=2><center><input class='mybutton' type='submit' name='submit1' value='Update'><center></td></tr>";
        echo "</table></center>";
        echo "</form></body></html>";
    }
}
}

echo "<center><a href='links.php' style='text-decoration: none'>BACK</a></center>";
echo "<br><br>";
echo "<center><a href='login.php' style='text-decoration: none'>LOGOUT</a></center>";

if(isset($_POST['submit1'])){
    $name = $_POST['pname'];
    $jersyno = $_POST['jno'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $country = $_POST['country'];

    $sq = "UPDATE players SET jersy_no='$jersyno', age='$age', height='$height', weight='$weight', country='$country' where name='$name'";
    $q = mysqli_query($conn, $sq);
    if($q){
        echo "<script>alert('SUCCESSFULLY UPDATED')</script>";
    }
    else{
        echo "<script>alert('UPDATION FAILED')</script>";
    }
}
?>