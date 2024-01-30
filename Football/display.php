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
        th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    body{
        background: powderblue;
    }
    </style>
</head>
<body>
    
</body>
</html>
<?php
$sq = "SELECT * FROM players";
$q = mysqli_query($conn, $sq);
if(mysqli_num_rows($q)){
        echo "<center><table  class='viewtable'  border=2px>";
        echo "<tr>";
        echo "<th>NAME</th>";
        echo "<th>JERSY NUMBER</th>";
        echo "<th>AGE</th>";
        echo "<th>HEIGHT</th>";
        echo "<th>WEIGHT</th>";
        echo "<th>COUNTRY</th>";
        echo "</tr>";

        while($row=mysqli_fetch_assoc($q)){
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['jersy_no']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['height']."</td>";
            echo "<td>".$row['weight']."</td>";
            echo "<td>".$row['country']."</td>";
            echo "</tr>";
       }
       echo "</table></center>";
    }
            echo "<center><a href='links.php' style='text-decoration: none'>BACK</a></center>";
            echo "<br><br>";
            echo "<center><a href='login.php' style='text-decoration: none'>LOGOUT</a></center>";
?>

