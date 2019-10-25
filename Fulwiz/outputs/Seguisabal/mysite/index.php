<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- This is a comment -->
    <?php
    // Echo is used to display text
    echo "Hello PHP";
    echo "<br/>";
    echo "Hello MySQL";

    $number = 100;
    $number2 = 500;
    echo "<br/>";
    echo $number;
    echo "<br/>";
    // echo $number2;
    // echo "<br/>";
    // echo $number + $number2;
    $firstName = "John";
    $lastName = "Doe";
    echo $firstName . " " . $lastName;
    echo "<br/>";
    echo "Welcome, {$firstName} {$lastName}";
    ?>
    <hr>
    <?php
    $price = 30;
    echo $price . "<br/>";
    $price = 40;
    echo "New Price: $price"; 
    echo "<br/>";
    define ("pi", 3.14);
    echo "The value of pi is " . pi; 
    echo "<br/>";
    ?>
    <hr>
    <?php
    $text = "the quick brown fox";
    $br = "<br/>";
    $hr = "<hr>";
    echo "Original Text: $text";
    echo "<br/>";
    echo ucfirst($text) . $br;
    echo ucwords($text) . $br;
    echo strtoupper($text) . $br;
    echo $hr;
    ?>
    <?php
    $br = "<br/>";
    $hr = "<hr>";
    $user = "John";
    echo str_repeat($user, 5) . $br;
    $product = "computer";
    $product2 = "smartphone";
    echo substr($product,0,3) . "-001". $br;
    echo substr($product2,5,5) . "-001". $br;
    $text2 = "the quick brown fox jumps over the lazy dog";
    echo "Position: " . strpos($text2, "fox") . $br;
    $item = "Watermelon";
    echo "The length of the $item is " . strlen($item) . "." . $br;
    echo str_replace("quick", "slow", $text2). $br;
?>
</body>
</html>