<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Mark</title>
    <style>
        body{
            background-color: #666666;
        }
        h1{
            color: powderblue;
            font-family: poppins;
        }
        .mytable{
            border: none;
            width: 50%;
            height: 50%;
        }
        tr, td{
            padding: 25px;
        }
        .btn1{
            padding: 15px 25px;
            background-color: aquamarine;
            border: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1><center>ADD MARK DETAILS</center></h1>
    <form method='POST' action="internal_print.php">
       <center> <table class='mytable' border=2px>
            <tr>
                <td>Name</td>
                <td><input type='text' name='name'></td>
            </tr>
            <tr>
                <td>Attendence</td>
                <td><input type='text' name='att'></td>
            </tr>
            <tr>
                <td>First internal</td>
                <td><input type='text' name='first'></td>
            </tr>
            <tr>
                <td>Second internal</td>
                <td><input type='text' name='second'></td>
            </tr>
            <tr>
                <td>First assignment</td>
                <td><input type='text' name='ass1'></td>
            </tr>
            <tr>
                <td>Second assignment</td>
                <td><input type='text' name='ass2'></td>
            </tr>
            <tr>
                <td colspan=2><center><input class='btn1' type='submit' name='calc' value='CALCULATE'></center></td>
            </tr>
    </table></center>
</body>
</html>
