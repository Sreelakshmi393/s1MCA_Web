<html>
<head>
<title>factorial</title>
</head>
<form method="POST">
enter the number<input type="number" name="num">
<br>
<input type="submit" value="submit">
</form>
<?php
$num=$_POST["num"];
$fact=1;
for($i=1;$i<=$num;$i++)
{
$fact*=$i;
}
echo"the fact of $num is $fact";
?>
</html>
