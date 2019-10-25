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
    <?php
    $numbers = array(23,45,68,34,36,54);
    echo "Index 5 is " . $numbers{5};
    echo "<br/>";
    $person = array("John","Doe",24,array("PHP","MYSQL","JAVASCRIPT"), "Cebu");
    echo "Welcome " . strtoupper($person[0]) . " " . strtoupper($person[1]) . " who lives in $person[4] <br/>";
    echo "Skills: {$person[3][0]},{$person[3][2]} . <br/>";
    ?>

    Associative Array
    <?php
    echo "<br/>";
    $data = array("fname" => "John","lname" => "Doe","address" => "Cebu");
    echo "Welcome {$data['fname']} {$data['lname']}";
    ?>

    <?php
    echo "Number of items: " . count($numbers) . "<br/>";
    echo "Max value: " . max($numbers) . "<br/>";
    echo "Min value: " . min($numbers) . "<br/>";
    sort($numbers);
    print_r($numbers);
    echo "is 68 in numbers? " . in_array(68,$numbers);
    ?>



</body>
</html>