<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    function definition
    <br>
    <?php
        function message(){
            echo "welcome to cebu" . "<br>";
        }
        message();
       
        function notif($user){
            echo "welcome, " . $user;
        }
        notif("maria" . "<br/>");
        notif("joseph" . "<br/>");
        //function with return value
        function total($price, $quantity){
            $total = ($price * $quantity);
            $total = number_format($total,2);
            return $price * $quantity;
        }
        echo "the total is: " . total(99.99,3);
        function monthlypayment($prodprice,$down,$monthstopay){
            $loanamount = ($prodprice - $down);
            $init_monthlypay = $loanamount / $monthstopay;
            $interest = $init_monthlypay * 0.03;
            $monthlyPayWithInterest = $init_monthlypay + $interest;
            return "monthly payment is: " . number_format($monthlyPayWithInterest,2) 
            . "<br/>" . "interest is: " . $interest . "<br/>" 
            . "monthly payment without interest is: " . number_format($init_monthlypay,2);
             }
        echo "<br/>";
        echo monthlypayment(40000,10000,9);

    
    ?>
</body>
</html>