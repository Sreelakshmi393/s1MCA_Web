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
$name=$_POST['fname'];
$no=$_POST['rno'];
$submark=$_POST['mark'];
$sq="insert into stud values($no, '$name', $submark)";
$p=mysqli_query($conn,$sq);
if($p)
    {
        echo "<script>
        alert('successfully inserted');
        </script>";
    }
?>