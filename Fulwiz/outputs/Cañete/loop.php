<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Loop:  
<br/>
        <?php
            $br = "<br/>";
            for ($val = 1 ; $val<=10 ; $val++)
            {
                echo $val . "Hello and Hi!" . "<br/>";
            }
    
        ?>
<br/>
    While Loop:
<br/>
        <?php
        $init = 0;
            echo "While Loop:";
        while ($init < 10)
        {
            echo $init . ",";
        }

        ?> -->
<br/>
    For each
        <?php
        // // $data = array("john", "Dee", 24, "Cebu");
        // // // foreach($data as $person)
        // // {
        //     echo $person . "<br/>";
        // }*/
        
    $person = array ("first-name" => "kevin", 
                     "lastname" => "Skoglund", 
                     "address" => "123 Main Street",
                     "city" => "Beverly Hills",
                     "state" => "CA",
                     "zip" => "90210");
                foreach($person as $a)
                {
                    echo $a. "<br/>";
                }
        
        ?>
</body>
</html>