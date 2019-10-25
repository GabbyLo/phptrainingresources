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
    $myvalue = -200;
    echo abs($myvalue);
    ?>
    <br/>
    expontential: pow(base,power)
    <?php 
    echo "<br/>";
    echo pow(2,8);
    ?>
    <br/>
    Squre Root: sqrt(value)
    <?php 
    echo "<br/>";
    echo sqrt(144);
    ?>
    <br/>
    modulo:
    <?php 
    echo "<br/>";
    echo fmod(2050,100) . "<br/>";
    ?>
    <br/>
    Ramdom:
    <?php
    echo "<br/>";
    echo rand(1,1000) . "<br/>";
    ?>
    <br/>
    Ramdom: "min max"
    <?php 
    echo "<br/>";
    echo rand(50,15). "<br/>";
    ?>
    <br/>
    Ciel vs Floor:
    <?php
    echo "<br/>";
    echo "ciel of 80" . ceil(80) . "<br/>";
    echo "Floor of 60" . floor(60) . "<br/>";
    ?>
    <br/>
    Round:
    <?php 
    echo "<br/>";
    echo "round of 100" . round(100) . "<br/>"; 
    ?>
    <br/>
    Number Format:
    <?php 
    echo "<br/>";
    $value = 23435.34;
    echo number_format($value,2) . "<br/>";
    ?>
    <br/>
    Increment vs Decrement:
    <?php 
    echo "<br/>";
    $queue = 1;
    $queue +=10;
    echo $queue;
    ?>
    <br/>
    <hr>
    <?php
    $numbers = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10,);
    echo $numbers[5] . "<br/>";
    ?>
</body>
</html>