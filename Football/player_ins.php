<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PLAYERS</title>
    <style>
        th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    body{
        background: powderblue;
    }

    .my-button {
            background-color: skyblue; /* Green */
            border: none;
            color: blue;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <center><h1>REGISTER NEW PLAYERS</h1></center>
    <form method='POST' action="">
    <center><table border="2px">
            <tr>
                <td>Name : </td>
                <td><input type="text" name="pname"></td>
            </tr>
            <tr>
                <td>Jersy No : </td>
                <td><input type="text" name="jno"></td>
            </tr>
            <tr>
                <td>Age : </td>
                <td><select name="age">
                <option value="select">select</option>
                    <?php
                    $start = 18;
                    $end = 35;

                    for($i=$start; $i<=$end; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Height(cm) : </td>
                <td><input type="text" name="height"></td>
            </tr>
            <tr>
                <td>Weight(kg) : </td>
                <td><input type="text" name="weight"></td>
            <tr>
            <tr>
                <td>Country : </td>
                <td><input type="text" name="country"></td>
            <tr>
            <tr>
                <td colspan=2><center><input class="my-button" type="submit" name="submit" value="REGISTER" onmouseover="enlargeText(this)" onmouseout="resetTextSize(this)"></center></td>
            <tr>
                </table><center>
                </form>
            <center><a href="links.php" style="text-decoration: none">BACK</a></center>
            <br><br>
            <center><a href="login.php" style="text-decoration: none">LOGOUT</a></center>
            <script>
                function enlargeText(element){
                    element.style.fontSize = "20px";
                }
                function resetTextSize(element){
                    element.style.fontSize = "15px";
                }
            </script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $jno = $_POST['jno'];
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $country = $_POST['country'];
    $sq = "INSERT into players values('$pname','$jno', '$age', '$height', '$weight', '$country')";
    $q = mysqli_query($conn,$sq);
    if($q){
        echo "<script>alert('REGISTRATION SUCCESSFULL')</script>";
    }else{
        echo "<script>alert('REGISTRATION FAILED')</script>";
    }
}
?>