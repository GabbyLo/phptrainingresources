<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   Function Definition
   <br>
   <?php
   function message (){
       echo "Welcome to Cebu";
       echo "<br/>";
       Notif("John");
    }

   message();
   echo "<br/>";
   function notif($user){
       echo "Welcome, " . $user;
   }

   notif("Maria");
   notif("Joseph");
   //Function with Return Value
   function total($price, $quantity){
       $total = $price * $quantity;
       $total = number_format($total,2);
       return $total;
   }
   echo "<br/>";
   echo "Total is " . total(499.99,3);
   function monthlypayment($prodprice,$down,$monthstopay){
       $loanamount = $prodprice - $down;
       $init_monthlypay = $loanamount / $monthstopay;
       $interest = $init_monthlypay * 0.03;
       $monthlyPayWithInterest = $init_monthlypay + $interest;
       return "Monthly Payment: " . number_format($monthlyPayWithInterest,2) . "<br/>" .
       "Interest is: " . $interest . "<br/>" .
       "Monthly Payment Without Interest is: " . number_format($init_monthlypay,2) . 
       "<br/> <hr/>";
       }
    echo"<br/>";
    echo "Monthly Payment is " . monthlypayment(40000,10000,9)
   ?>
</body>
</html>