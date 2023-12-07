<?php
include 'conn.php';
?>
<html>
    <head><head>
<body>
<form action="mark_conn.php" method="POST">
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
                        <option value="Maths">Maths</option>
                        <option value="DFCA">DFCA</option>
                        <option value="ADS">ADS</option>
                        <option value="ASE">ASE</option>
                        <option value="Web Lab">Web Lab</option>
                        <option value="Python Lab">Python Lab</option>
                        <option value="ADS Lab">ADS Lab</option>
                        </select>
                </tr>
                <tr>
                    <td>Series 1 Mark</td>
                    <td><input type="text" name="m1"></td>
                </tr>
                <tr>
                    <td>Series 2 Mark</td>
                    <td><input type="text" name="m2"></td>
                </tr>
                <tr>
                    <td>Assignment 1 Mark</td>
                    <td><input type="text" name="a1"></td>
                </tr>
                <tr>
                    <td>Assignment 2 Mark</td>
                    <td><input type="text" name="a2"></td>
                </tr>
                <tr>
                    <td colspan=2 style="text-align-center"><center><input type="submit" value="Submit"></center></td>
                </tr>
                
            </table>
            </center>
        </form>
</body>
</html>