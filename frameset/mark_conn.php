<?php
$conn=mysqli_connect("localhost","root","","student");
if($conn)
{
    echo "connected";
}
else{
    echo "connection failed";
}
$ktuid=$_POST["ktuid"];
$sub=$_POST["subject"];
$s1=$_POST["m1"];
$s2=$_POST["m2"];
$as1=$_POST["a1"];
$as2=$_POST["a2"];
$s="INSERT into mark1 values('$ktuid','$sub','$s1','$s2','$as1','$as2')";
$q=mysqli_query($conn,$s);
if($q)
{
    echo "insertion sucessfull ";
}
else{
    echo "error in insertion";
}
?>
