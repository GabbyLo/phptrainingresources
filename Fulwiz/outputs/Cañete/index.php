<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- this is comment -->
    <?php echo "Hello PHP" ?> <br/>
    <?php echo " Hello MyQSL" ?> <br/>
    <?php echo "Welcome to PhilHealth" ?>
    <?php
    $number = 100; 
    echo "<br/>";
    $number2 = 200;
    echo "<br/>";
    echo $number2; 
    echo "<br/>";
    $firstName = "John";
    $lastName = "Doe";
    echo $firstName . " " . $lastName;
    ?>
    <hr>
    <?php
    $price = 30;
    echo $price . "<br/>";
    echo "New Price: $price";
    echo "<br/>";
    define ("pi", 3.14);
    echo "The value of pi is" . pi;
    echo "<br/>";
    ?>
    <hr>
    <?php 
    $text = "the quick brown fox";
    echo "Original text : $text";
    echo "<br/>";
    echo ucfirst($text) . "<br/>";
    echo ucwords($text). "<br/>";
    echo strtoupper($text);
    ?>
    <?php 
    $br = "<br/>";
    $user = "John ";
    echo "<br/>";
    echo str_repeat($user, 5) . $br;
    $product = "computer";
    $product2 = "smartphone";
    //display = > com-001; 
    //display = >phone-001;
    echo substr($product,0,3) . "-001" . $br;
    echo substr($product2,5,5) . "-001";
    $text2 = "the quick brown fox jumps over the lazy dog";
    echo "Position:" . strpos($text2, "fox"). $br;
    $item = "watermelon";
    echo 'The lenght of item is' . strlen($item) . ".". $br;
    echo str_replace("quick", "fast", $text2) . $br; 
    ?>
</body>
</html>