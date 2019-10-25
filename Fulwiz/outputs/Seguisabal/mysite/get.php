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
    if(isset($_POST['submit']))
    {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $age = $_POST['age'];
        if(empty($firstName) || empty($lastName) || empty($age))
        {
            if(empty($firstName))
            {
                echo "The first name is empty! <br/>";
            }
            if(empty($lastName))
            {
                echo "The last name is empty! <br/>";
            }
            if(empty($age))
            {
                echo "The age is empty! <br/>";
            }
                echo "<a href = \"post.php\"> Go Back</a>";
        }
        else
            {
                echo "Welcome $firstName $lastName <br/> Age is $age";
            }
    }
    else
    {
        echo "Go to post.php first";
        header ("location: post.php");
    }
    
    ?>
</body>
</html>