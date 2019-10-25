<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Array:
    <br/>
        <?php 
        $number = array(10, 20, 30, 40, 50, 60);
        echo "index 2 is:" . $number[2] . "<br/>";
        $person = array ("John" , "Doe", 20 , array ("PHP", "MYSQL", "JAVACRIPT"), "Cebu");
        echo "Welcome Mr. $person[0] $person[1] who live in $person[4]" . "<br/>";
        echo "skills:" . " " .  $person[3][0] . " " . $person[3][1] . " " . $person[3][2] . "<br/>";
        ?>
<br/>
    ASSOCIATIVE Array:
    <br/>
        <?php
        $data = array("fname" => "John", "lname" => "Doe");
        echo "Welcome " . $data["fname"] . " " . $data["lname"];
        ?>
 <br/>
    Array Function:
    <br/>
        <?php 
        echo "Number of Items:" . count($number) . "<br/>";
        echo "Max value:" . max($number) . "<br/>";
        echo "Min value:" . min($number) . "<br/>";
        echo "Sort:" . sort($number) . "<br/>";
        print_r($number) . "<br/>";
        echo "Is 68 in numbers? " . in_array(68, $number) . "<br/>";
        ?>
</body>
</html>