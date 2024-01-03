<?php
include 'conn.php';
$bid = $_POST['bid'];
$copy = $_POST['copy'];

$q = "UPDATE book set copies='$copy' where bookid='$bid'";
$s = mysqli_query($conn, $q);
if($s){
    echo "<script>alert('DATA UPDATED SUCESSFULLY')</script>";
}
else{
    echo "<script>alert('DATA UPDATION FAILED')</script>";
}
?>