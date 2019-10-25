<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php
                session_start();
                if(isset($_SESSION['uname']))
                {
                    header("location: home.php");
                }
                
        ?>
        <h1 align="center"><strong >LOG-IN</strong></h1>
        <style>
            label{color: blue}
            h1{color:green}
        </style> 
        
        <form action="login.php" method=POST>
            <label>Username </label> <br>
            <input type = "text" name="uname" ><br>
            <label>Password </label> <br>
            <input type = "password" name="password"><br><br>
            <input type = "submit" name="submit" value ="GO">
        </form>   
        
</body>
</html>