<html>
<head>
</head>
<body bgcolor="tomato">
<?php
$name=$_POST['fname'];
$age=$_POST['age'];
$email=$_POST['email'];
$phoneH=$_POST['ph'];
$phoneO=$_POST['po'];
$lang1=$_POST['l1'];
$lang2=$_POST['l2'];
$lang3=$_POST['l3'];
echo"<center>";


echo"<h1>welcome".$name."</h1><br>";
echo"<table border='2'>";
echo"<tr><td>my name is</td>"."<td>" .$name."</td></tr>";

echo"<tr><td>my age is</td>"."<td>" .$age."</td></tr>";

echo"<tr><td>my email is</td>"."<td>" .$email."</td></tr>";

echo"<tr><td>my home phone  is</td>"."<td>" .$phoneH."</td></tr>";

echo"<tr><td>my office phone  is</td>"."<td>" .$phoneO."</td></tr>";

echo"<tr><td>language known is </td>"."<td><ul><li>".$lang1."</li><li>".$lang2."</li><li>".$lang3."</li></ul></td></tr>";

echo"</table>";
echo"</center>";
?>
</body>
</html>

