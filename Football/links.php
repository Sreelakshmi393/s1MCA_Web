<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body id="linkbody">
    <center><marquee scrollamount="12"><h1>WELCOME TO PLAYERS MANAGEMENT SYSTEM</h1></marquee></center>
    <div>
    <center><a href="player_ins.php" style="text-decoration: none" onmouseover="enlargeText(this)" onmouseout="resetTextSize(this)">RESGISTER NEW PLAYER</a></center>
    <br>
    <br>
    <center><a href="update.php" style="text-decoration: none" onmouseover="enlargeText(this)" onmouseout="resetTextSize(this)">UPDATE PLAYER'S DETAILS</a></center>
    <br>
    <br>
    <center><a href="delete.php" style="text-decoration: none" onmouseover="enlargeText(this)" onmouseout="resetTextSize(this)">REMOVE PLAYER</a></center>
    <br>
    <br>
    <center><a href="display.php" style="text-decoration: none" onmouseover="enlargeText(this)" onmouseout="resetTextSize(this)">VIEW DETAILS</a></center>
    <br>
    <br>
    <center><a href="login.php" style="text-decoration: none">LOGOUT</a></center>
    </div>
    <br>
    <br>
    <script>
    function enlargeText(element) {
    // Increase font size
    element.style.fontSize = "20px";
    }

    function resetTextSize(element) {
    // Reset font size
    element.style.fontSize = "16px"; // Or whatever your default font size is
    }
    </script>

    <div id="contact">
    <br>
    <br>
        <center><h3>ANY COMPLAINTS? REPORT HERE</h3></center>
        <form method='POST' action="" onsubmit="return validateForm()"> 
        <center>   
        <table class="contacttable">
            <tr>
                <td><center>Name</center></td>
                <td><center><input type="text" name="name" id="name"></center></td>
            </tr>
            <tr>
                <td><center>Phone number</center></td>
                <td><center><input type="text" name="phno" id="phno"></center></td>
            </tr>
            <tr>
                <td><center>Email</center></td>
                <td><center><input type="text" name="email" id="email"></center></td>
            </tr>
            <tr>
                <td><center>Complaint</center></td>
                <td><center><input type="textarea" name="comp"></center></td>
            </tr>
            <tr>
                <td colspan=2><center><input class="mybutton2" type="submit" name="submit"></center></td>
            <tr>
        </table></center>
</form>
        <br>
        <br>
</div>

<?php
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $phno =$_POST['phno'];
   $email = $_POST['email'];
   $comp = $_POST['comp'];

   $sq = "INSERT into complaints values('','$name','$phno','$email','$comp')";
   $q = mysqli_query($conn,$sq);
   if($q){
    echo "<script>alert('COMPLAINT SUBMITTED SUCCESSFULLY')</script>";
   }else{
    echo "<script>alert('COMPLAINT SUBMITION FAILED)</script>";
   }
}
?>

<script>
    function validateName(){
        let name = document.getElementById('name').value;
        if(/^[a-zA-Z\s]+$/.test(name) && name.length>=3){
            return true;
        }
            alert('ENTER A VALID NAME');
            return false;
    }

    function validatePhone() {
		let phone = document.getElementById('phno').value;
		if (/^\+91-?\d{10}$/.test(phone)) {
			return true;
		}
		alert("Phone number Invalid!");
		return false;
	}

    function validateEmail() {
		let email = document.getElementById('email').value;
		let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	    if (emailRegex.test(email)) {
			return true;
		}
			alert("Invalid email format!");
			return false;
		}

    function validateForm(){
        if(validateName() && validatePhone() && validateEmail()){
            return true;
        }
        return false;
    }
    </script>
</body>
</html>