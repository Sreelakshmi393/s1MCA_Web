
<?php
$conn=mysqli_connect('localhost','root','','student');
if(isset($_POST['submit'])){
$roll=$_POST['rollno'];
//$mark=$_POST['mark'];
$s="select * from stud where rollno='$roll'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q))
{
    echo "<html><body><form method='post'>";
    while($row=mysqli_fetch_assoc($q))
    {
        echo "ROLLNO <input type='text' value=".$row['rollno']."disabled name='rollno' readonly>";
        echo "NAME <input type='text' value=".$row['name']." disabled>";
        echo "MARK <input type='text' value=".$row['mark']." name='mark'>";
    }
    echo "<input type='submit' value='update' name='update'>";
    echo "</form></body></html";
}
}
if(isset($_POST['update']))
{
    $roll=$_POST['rollno'];
    $mark=$_POST['mark'];   
$up="update stud set mark='$mark' where rollno='$roll'";
$mq=mysqli_query($conn,$up);
if($mq)
{
    echo "Mark updated";

}
else{
    echo "Mark not updated";
}
}
?>