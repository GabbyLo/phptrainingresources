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

        //Simple Function
        function message()
        {
            echo "Welcome to Cebu";
        }
        message();
        echo $br;

        //Function with Parameter
        function notif ($user)
        {
            echo "Welcome, " . $user;
        }
        notif("Maria");
        echo $br;

        //Function with Return Value
        function total($price, $quantity)
        {
            $total = $price * $quantity;
            $total = number_format($total, 2);
            return "The total is: " . $total;
        }
        echo total(99.99,3) . $br . $hr;

        //EXERCISE
        function monthlyPayment($price, $down, $monthsToPay)
        {
            $GrossMonthly = (($price - $down) / $monthsToPay);
            $interest = $GrossMonthly * 0.03;
            $monthlyPayment = $GrossMonthly + $interest;
            return "Monthly Payment is: " . number_format($monthlyPayment, 2)
            . "<br/>". "Interest Rate is " . $interest
            . "<br/>" . "Monthly Payment without Interest: " . number_format($GrossMonthly, 2);
        }

        echo "Customer: John" . $br;
        echo monthlyPayment(40000,10000,9) . $br . $hr;

        
    ?>
</body>
</html>