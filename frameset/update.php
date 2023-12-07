<?php
include 'conn.php';
?>
<html>
    <head><head>
<body>
<form action="" method="POST">
            <center>
            <table border=5px width=400px height=400px>
                <tr>
                    <th colspan=2>Mark Details</th>
                </tr>
                
                <tr>
            <td width=250px>KTU-ID</td>
            <td>
            <select name="ktuid">
            <option value="">Select an option</option>
            <?php
            $query = "SELECT ktuid FROM details";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) 
            {

            while ($row = mysqli_fetch_assoc($result)) 
            {
            echo "<option>".$row['ktuid']."<br></option>";
            }
            }
            ?>
            </select>
            </td>
            </tr>


                <tr>
                    <td>Subject</td>
                    <td><select name="subject">
                    <?php
                
                    
                       echo " <option value='Maths'>Maths</option>";
                       echo " <option value='DFCA'>DFCA</option>";
                       echo " <option value='ADS'>ADS</option>";
                       echo " <option value='ASE'>ASE</option>";
                       echo " <option value='Web Lab'>Web Lab</option>";
                       echo " <option value='Python Lab'>Python Lab</option>";
                       echo " <option value=ADS Lab'>ADS Lab</option>";
                       ?>
                        </select>
                    
                </tr>
                <tr>
                    <td colspan=2><center><input type="submit" name="submit"></center></td>
                </tr>
                
            </table>
            </center>
        </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$ktuid1=$_POST["ktuid"];
$subj=$_POST["subject"];
$s="SELECT * from mark1 where ktuid='$ktuid1' AND subject='$subj' ";
$result = mysqli_query($conn,$s);
if(mysqli_num_rows($result)){
    echo "<html><body><form method='POST' action='mark_up.php'>";
    while($row=mysqli_fetch_assoc($result)){
        echo "series 1 <input type='text' name='ktuid' value=".$row['ktuid']." readonly><br>";
        echo "series 1 <input type='text' name='subject' value=".$row['subject']." readonly><br>";
        echo "series 1 <input type='number' name='m1' value=".$row['series1']."><br>";
        echo "series 2 <input type='number' name='m2' value=".$row['series2']."><br>";
        echo "assignment 1 <input type='number' name='a1' value=".$row['assign1']."><br>";
        echo "assignment 2 <input type='number' name='a2' value=".$row['assign2']."><br>";
    }
    echo"<center><input type='submit' value='save' name='save'></center>";
    echo"</form></body></html>";

}
}
?>