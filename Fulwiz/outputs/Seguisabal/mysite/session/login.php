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
    if(isset($_POST['submit']))
    {
        $username = $_POST['uname'];
        $password = $_POST['password'];
        // if(empty($username) || empty($password))
        // {
        //     if(empty($username))
        //     {
        //         echo "The username is empty! <br/>";
        //     }
        //     if(empty($password))
        //     {
        //         echo "The password is empty! <br/>";
        //     }
        //         echo "<a href = \"login.html\"> Go Back</a>";
        // }
        // else
        //     {
        //         echo "Welcome $username <br/>";
        //     }
            if(!isset($_SESSION['uname']))
            {
                $_SESSION['uname'] = $username;
                header("location: home.php");
            }
            else
            {
                header("location: home.php");
            }
    }
    else
    {
        echo "Go to index.php first";
        header ("location: index.php");
    }
    
    ?>
</body>
</html>