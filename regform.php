<html>
<head><title>regform</title></head>
<body style="background-color:lightblue">
<h1 style="color:red;font-size:30px;font-weight:bold;text-align:center">WELCOME TO FRESHERS WORLD!!</h1><br>
<table border="2" align="center">
<form action="result.php" method="POST">
<tr rowspan="12">
<th colspan="6">REGISTRATION FORM</th>
</tr>
<tr>

<td>NAME</td><td><input type="text" name="fname"></td>
<tr>
<td>AGE</td>
<td><select id="age" name="age" >

<option value="select">select</option>
<?php
for($i=18;$i<=40;$i++)
{
echo"<option value=" . $i .">" . $i ."</option>";
}
?>
</td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" id="password"></td>
</tr>

<tr>
<td>RE ENTER PASSWORD</td>
<td><input type="password" id="re-password"></td>
</tr>
<tr>
<td rowspan="3">select your security questions</td>
<td><input type="radio" name="sec">who is your best freind</td></tr>
<tr><td><input type="radio" name="sec">what is your favouritwe color</td></tr>
<tr><td><input type="radio" name="sec">who is your best teacher</td></tr>
</tr>
<tr>
<td>answr to security question</td>
<td><input type="text" id="answer"></td>
</tr>
<tr>
<td>EMAIL ID</td>
<td><input type="text" id="email" name="email"></td>
</tr>
<tr>
<td>LANGUAGES KNOWN</td>
<td><input type="checkbox" name="l1" value="english">english</input>
<input type="checkbox" name="l2" value="malayalam">malayalam</input>
<input type="checkbox" name="l3" value="hindi">hindi</input></td>
</tr>
<tr> 
<td>PHONE NUMBER</td>
<td>
<table border="1">
<tr><th>home</th>
<th>OFFICE</th></tr>
<tr><td><input type="number" name="ph"></td>
<td><input type="number" name="po"></td></tr>
</table>
</td>
</tr>
<tr>
<td>Upload CV</td>
<td><button>choose file</button>no file choosen</td>
</tr>
<tr>
<td><input type="reset"></td>
<td><input type="submit"></td>
</tr>
</form>
</table>
</html>

