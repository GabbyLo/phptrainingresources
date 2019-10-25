<?php include_once ("config.php"); 
    $result = $conn->query("SELECT * FROM tblemployee");
    //print_r $result;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<body>
    <h1 align = center>Welcome to Philsite</h1>
    <table border = 1>
        <tr>
            <!-- <th>ID</th> -->
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Birthdate</th>
            <th>Department</th>
            <th>Rank</th>
            <th>Edit</th>
        </tr>
    <?php 	
        while($row = $result->fetch(PDO::FETCH_ASSOC)) 
        { 		
            echo "<tr>";
            // echo "<td>".$row['ID']."</td>";
            echo "<td>".$row['Efname']."</td>";
            echo "<td>".$row['Elname']."</td>";	
            echo "<td>".$row['Egender']."</td>";	
            echo "<td>".$row['Ebirthdate']."</td>";	
            echo "<td>".$row['Edept']."</td>";	
            echo "<td>".$row['rank']."</td>";
            echo "<td><a href=\"edit.php?key=$row[ID]&fname=$row[Efname]\">Edit</a></td>";		
	    }
	?>
    </table>

</body>
</html>