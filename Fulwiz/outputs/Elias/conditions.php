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
//month:1-12
$month = 7;
if ($month == 1){echo "January";}
else if ($month == 2){echo "February";}
else if ($month == 3){echo "March";}
else if ($month == 4){echo "April";}
else if ($month == 5){echo "May";}
else if ($month == 6){echo "June";}
else if ($month == 7){echo "July";}
else if ($month == 8){echo "August";}
else if ($month == 9){echo "September";}
else if ($month == 10){echo "October";}
else if ($month == 11){echo "November";}
else if ($month == 12){echo "December";}
else{echo "Invalid";}
?>

<?php
echo "<br/>";
$e = 200;
if(!isset($e)){echo 'variable $e is not set';}
else{echo 'variable $e is set';}
?>

<?php
$quantity = "de";
if(is_numeric($quantity)){$total = 5 * $quantity;
    echo $total;}
    else {echo "Invalid Value";}
    ?>
<br>
<?php
$username = "";
if (empty($username)){echo "It is empty";}
else {echo "Not empty";}
?>










    
</body>
</html>