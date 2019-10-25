<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        if(30<10)
        {
            echo "I am true";
        }
        else
        {
            echo "I am false"; 
        }

    ?>
<br/>
Month:
    <?php
    //month 1-12
    $month = 13;
    if ($month == 1)
        {
            echo "January";        
        }
    else if ($month == 2)
        {
            echo "February";
        }        
    else if ($month == 3)
        {
            echo "March";
        }
    else if ($month == 4)
        {
            echo "April";
        }
    else if ($month == 5)
        {
            echo "May";
        }
    else if ($month == 6)
        {
            echo " June";
        }        
    else if ($month == 7)
        {
            echo "July";
        }           
    else if ($month == 8)
        {
            echo "August";
        }
    else if ($month == 9)
        {
            echo "September";
        }
    else if ($month == 10)
        {
            echo "October";
        }   
    else if ($month == 11)
        {
            echo "November";
        }
    else if ($month == 12)
        {
            echo "December";
        }     
    else 
        {
            echo "Invalid";
        }
    ?>
<br/>
<br/>
    Operator:
<br/>
    <?php 
        $e = 200;
        if (isset($e))
        {
            echo "variable $e exist";
        }
        else
        {
            echo "variable $e is not exist";
        }
    ?>
<br/>
<br/>
    Quantity:
<br/>
     <?php
        $quantity = "de";
        if(is_numeric($quantity))
        {
        $total = 5 * $quantity;
            echo $total . "<br/>";
        }
        else
        {
            echo "invalid";
        }
    ?>
<br/>  
<br/>
    The value is empty or not:
<br/>
        <?php 
        $username = " ";
        if (empty($username))

        {
            echo "It is empty";
        }
        else
        {
            echo "Not Empty";
        }
    ?>
</body>
</html>