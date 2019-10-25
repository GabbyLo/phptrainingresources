<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 align="center"><strong >LOG-IN</strong></h1>
    <style>
        label{color: blue}
        h1{color:green}
    </style> 
    <form action="get.php" method=POST>
        <label>First Name </label> <br>
        <input type = "text" name="fname" ><br>
        <label>Last Name </label> <br>
        <input type = "text" name="lname"><br>
        <label>Age </label> <br>
        <input type = "text" name="age"><br><br>
        <input type = "submit" name="submit" value ="GO">
    </form>   
        
    <?php

    ?>
</body>
</html>