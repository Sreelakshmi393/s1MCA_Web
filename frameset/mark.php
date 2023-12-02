<html>
    <head><head>
<body>
<form action="" method="POST">
            <center>
            <table border=5px width=400px height=400px>
                <tr>
                    <th colspan=2>Sign In</th>
                </tr>
                <tr>
                    <td>KTU ID</td>
                    <td><select name="dropdown">
                        <?php 
                            $conn=mysqli_connect('localhost','root','','student');
                            if($conn)
                                {
                                    echo "connection successful";
                                }
                            else
                                {
                                echo "connection failed !";
                                }
                            $s="SELECT ktuid from details";
                            $q=mysqli_query($conn,$s);
                            if(mysqli_num_rows($q))
                            {
                                while($row=mysqli_fetch_assoc($q))
                                {
                                    
                                    echo"<option value=$
                                } 
                        ?>

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