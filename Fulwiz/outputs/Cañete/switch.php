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
        $month = 12;
        switch($month)
            {
                case 1: $monthname = "January";
                break;
                case 2; $monthname = "February";
                break;
                case 3: $monthname = "March";
                break;
                case 4; $monthname = "April";
                break;
                case 5: $monthname = "May";
                break;
                case 6; $monthname = "June";
                break;
                case 7: $monthname = "July";
                break;
                case 8; $monthname = "August";
                break;
                case 9: $monthname = "September";
                break;
                case 10; $monthname = "October";
                break;
                case 11: $monthname = "November";
                break;
                case 12; $monthname = "December";
                break;
            }
            echo "Month Name is: " . $monthname . "<br/>";
    
    ?>
</body>
</html>