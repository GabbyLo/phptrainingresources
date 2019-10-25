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
        $myvalue = -200;
        echo abs($myvalue) . $br;
        echo pow(2,8) . $br;
        echo sqrt(144) . $br;
        echo fmod(2000,100) . $br;
        echo rand(1,100) . $br;
        echo "Ciel of 74.5 is " . ceil(74.5) . $br;
        echo "Floor of 74.5 is " . floor(74.5) . $br;
        echo "Round of 74.4 is " . round(74.4) . $br;
        $value = 23435.34;
        echo number_format($value,2) . $br;
        $queue = 1;
        // $queue++;
        // echo $queue . $br;
        $queue += 10;
        echo $queue . $br . $br . $hr . $br;
    
    ?>
    <?php
        $numbers = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        echo $numbers[2] . $br;
    ?>

</body>
</html>