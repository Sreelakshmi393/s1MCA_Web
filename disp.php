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
$s="select * from stud";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q))
{
    echo"<table border=1px>
        <tr><th>ROLL NO</th>
        <th>NAME</th>
        <th>MARK</th></tr>";
    while($row=mysqli_fetch_assoc($q))
    {
        
        echo"<tr>";
        echo "<td>".$row["rollno"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["mark"]."</td>";
        echo"</tr>";
    }
    echo "</table>";
}
else{
    echo "empty";
}

?>