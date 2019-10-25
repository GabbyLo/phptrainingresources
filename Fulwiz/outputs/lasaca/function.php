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
    
    function message1()
    {
        echo "Welcome to Cebu" . "<br/>";
        message2("Jan");
    }
    
    function message2($user)
    {
        echo "Welcome, " . $user . "<br/>";
    }
    
    function total($price, $quantity)
    {
        $total = number_format($price * $quantity);     
        return $total;
    }

    function compute_mo_payment($product_price, $down_payment, $mo_to_pay, $interest)
    {
        // monthly payment = ((price - down) * ( 1 + (interest x 0.01))) / number of months to pay
        $mo_payment = (($product_price - $down_payment) * (1 + ($interest * 0.01))) / $mo_to_pay;
        $mo_payment = number_format($mo_payment,2);
        return $mo_payment;
    }
        //message1();
        //message2("Ian");
        //echo " The total price of item (price x quantity) is Php" . total(350.35,3) . "<br/>";
        echo " The monthly payment is Php" . compute_mo_payment(100,50,5,3) . "<br/>";
    ?>
</body>
</html>