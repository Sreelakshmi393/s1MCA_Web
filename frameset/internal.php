<html>
    <head></head>
    <body>
        <form method="POST" action="internal.php">
        <table>
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
</td>  
                </tr>
                <tr><td>
                    <input type="submit" value="submit" name="submit">
</td></tr>
        </table>
</form>
    </body>
</html>
<?php
include 'conn.php';
$sub=$_POST['subject'];
if(isset($_POST['submit']))
{
    $sq="SELECT * from mark1 where subject='$sub'";
    $q=mysqli_query($conn,$sq);
    if(mysqli_num_rows($q))
{
    echo "<table border=2px>";
    while($row=mysqli_fetch_assoc($q)){
        $att=$row['attendance'];
        if($att>=90){
            $at_mark = 8;
        }
        elseif($att<90 && $att>=80){
            $at_mark = 7;
        }
        elseif($att<80 && $att>=70){
            $at_mark = 6;
        }
        else{
            $at_mark = 0;
        }
        $in_series = (($row['series1']+$row['series2'])/100)*20;
        $in_ass = ($row['assign1'] + $row['assign2'])/2;
        $internal = $in_series + $in_ass + $at_mark;
        echo "<tr><td>";
        echo $row['ktuid']."</td>";
        echo "<td>".$internal."</td></tr>";
    }
    echo "</table>";
}
echo "<input type='button' onclick='window.print()' value='Print'>";
}
?>
