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
        $br = "<br/>";
        $hr = "<hr/>";
        $numbers = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        echo "The index 2 is: " .$numbers[2] . $br;
        $person = array ("Al","Doe",24,array("PHP", "MYSQL" , "JAVASCRIPT"), "Cebu");
        echo "Welcome Mr. " . strtoupper($person[0]) . " " . strtoupper($person[1]) . " " .  "who lives in $person[4]" . $br;
        echo "Skills: " . $person[3][0] . " ". $person[3][1] . " " . $person[3][2] . $br . $hr;

        // ASSOCIATIVE ARRAY
        $data = array ("fname" => "John", "lname" => "Doe");
        echo $data["fname"] . $br;
        echo "Number of Items: " . count($numbers) . $br;
        echo "Max Value: " . max($numbers) . $br;
        echo "Min Value: " . min($numbers) . $br;
        echo "Sort: " . rsort($numbers) . $br;
        print_r($numbers);
        echo $br;
        echo "Is 68 in numbers? " . in_array(68,$numbers) . $br;


    ?>
</body>
</html>