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

        //FOR LOOP
        /*for ($val = 1; $val <= 10; $val++)
        {
            echo $val . " - Hello" . $br;
        }*/

        //WHILE LOOP
        /*$init = 0;
        echo "While Loop: ";
        while($init < 10)
        {
            echo $init . ",";
            $init++;
        }*/

        //FOR EACH
        // $data = array("John", "Dee", 24, "Cebu");
        // foreach($data as $person)
        //     {
        //         echo $person . $br;
        //     }
        // $person = array ("first_name" => "Kevin", 
        // "last_name" => "Skoglund", 
        // "address" => "123 Main Street", 
        // "city" => "Beverly Hills", 
        // "state" => "CA", 
        // "zipcode" => "90210");
        // foreach($person as $att => $x)
        //     {
        //         echo $att. " - " . $x. $br;
        //     }

        $products = array (
            "Product Code" => "P-001", 
            "Product" => "LGTV 50\"", 
            "Price" => 23000, 
            "Brand" => "LG", 
            "Stock" => 5, 
        );
        foreach($products as $key => $values)
        {
            if (is_numeric($values))
            {
                $values = number_format($values, 2);
            }
                echo $key. " = " . $values. $br;
        }


    
    ?>
</body>
</html>