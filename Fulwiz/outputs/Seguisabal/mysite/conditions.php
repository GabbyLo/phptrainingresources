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
        /*$grade = 75;
        if($grade > 74)
            {
                echo "Passed" . $br ;
            }
        else 
            {
                echo "Failed";
            }
        $month = 8;
        if($month == 1)
            {
                echo "January" .$br;
            }
        else if ($month == 2)
            {
                echo "February" .$br;
            }
        else if ($month == 3)
            {
                echo "March".$br;
            }
        else if ($month == 4)
            {
                echo "April".$br;
            }
        else if ($month == 5)
            {
                echo "May" . $br;
            }     
        else if ($month == 6)
            {
                echo "June" . $br;
            }
        else if ($month == 7)
            {
                echo "July" . $br;
            }
        else if ($month == 8)
            {
                echo "August" . $br;
            }
        else if ($month == 9)
            {
                echo "September" . $br;
            }
        else if ($month == 10)
            {
                echo "October" . $br;
            }
        else if ($month == 11)
            {
                echo "November" . $br;
            }
        else if ($month == 12)
            {
                echo "December" . $br;
            }
        else
            {
                echo "Invalid Input" . $br;
            }

            //TO CHECK IF THE VALUE EXISTS OR NOT
        $e = 200;
        if (!isset($e))
            {
                echo "Variable $e is not set." . $br;
            }
        else
            {
                echo "Variable $e is set." . $br;
            }*/
        
        $quantity = "5";
        if(is_numeric($quantity))
            {
                $total = 5 * $quantity;
                echo "The total is " . $total . $br;
            }
        else
            {
                echo "Invalid Number." . $br;
            }

        //TO CHECK IF THE VALUE IS EMPTY OR NOT
        $username = " ";
        if(empty($username))
            {
                echo "It is empty" . $br;
            }
        else
            {
                echo "Not empty" . $br;
            }
        







    ?>
</body>
</html>