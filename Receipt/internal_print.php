<?php
if(isset($_POST['calc'])){
    $name = $_POST['name'];
    $att = $_POST['att'];
    $in1 = $_POST['first'];
    $in2 = $_POST['second'];
    $ass1 = $_POST['ass1'];
    $ass2 = $_POST['ass2'];

    if($att >= 90){
        $att_mark=10;
    }else if($att >= 85 && $att<90){
        $att_mark=9;
    }else if($att>=80 && $att<85){
        $att_mark=8;
    }else if($att >=75 && $att<80){
        $att_mark=7;
    }else{
        $att_mark=0;
    }

    $series_mark = (($in1 + $in2)/100)*20;
    $ass_mark = ($ass1+$ass2)/2;
    $internal = $series_mark+$ass_mark+$att_mark;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARK</title>
    <style>
    .mytable{
            border: none;
            width: 50%;
            height: 50%;
        }
        td, tr{
            padding: 25px;
        }
        body{
            background-color: #666666;
        }
        h1{
            color: powderblue;
            font-family: poppins;
        }
        .btn{
            background-color: powderblue;
            padding: 15px 25px;
            border: none;
            border-radius: 8px;
        }
        a{
            text-decoration: none;
            font-size: 20px;
            color: hotpink;
        }
        </style>
</head>
<body>
    <h1><center>GET YOUR SLIP HERE</center></h1>
    <form>
        <center><table class='mytable' border=2px>
            <tr>
                <td>NAME</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <td>ATTENDANCE</td>
                <td><?php echo $att ?></td>
            </tr>
            <tr>
                <td>INTERNAL MARK</td>
                <td><?php echo $internal ?></td>
            </tr>
            <tr>
                <td colspan=2><center><input class='btn' type='button' onclick='window.print()' value='PRINT'></center></td>
            </tr>
    </table>
            <center><a href='internal.php'>BACK</a></center>
        
</body>
</html>