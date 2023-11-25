<html>
    <head>
        <title></title>
    <head>
    <body>
        <form action="rollno.php" method="POST">
            Enter Roll No: <input type="number" name="rno">
            <input type="submit">
        </form>
    </body>
</html>

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
$rno = $_POST['rno'];
$s="select * from stud where rollno='$rno'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q))
{
    echo"<table border=1px>
    <tr><th>ROLL NO</th>
    <th>NAME</th>
    <th>MARK</th></tr>";
}
while($row=mysqli_fetch_assoc($q))
    {
        
        echo "<tr>";
        echo "<td>".$row["rollno"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["mark"]."</td>";
        echo "</tr>";
        
    }
    echo "</table>";

?>