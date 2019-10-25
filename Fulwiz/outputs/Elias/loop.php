<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    1. Initialization =>
    10 - 100
    => 10
    2. Condition
    <= 100
    3. Increment / Decrement
    ++ / $val = $ val + 1
    4. Statement
    echo $val;

    Loops:
    <?php
    for ($val = 1 ; $val<=10 ; $val++){echo $val . " - Hello" . "<br/>";}
    ?>

    For Loop:
    <?php
    // for ($val = 1 ; $val<=10 ; $val++){}

    ?>

    ForEach
    <?php
    echo "<br/>";
    $data = array("John","Doe",24,"Cebu");
    foreach($data as $person){echo $person . "<br/>";}
    ?>

    <?php
    echo "<br/>";
    $data = array(
        "first_name" => "Kevin", 
        "last_name"  => "Skoglund",
        "address"    => "123 Main Street",
        "city"       => "Beverly Hills",
        "state"      => "CA",
        "zip_code"   => "90210"
      );
      foreach($data as $person){echo $person . "<br/>";}
    ?>
    <br/>

    Foreach for Associative Array
    <?php
    echo "<br/>";
    $person = array(
        "first_name" => "Kevin", 
        "last_name"  => "Skoglund",
        "address"    => "123 Main Street",
        "city"       => "Beverly Hills",
        "state"      => "CA",
        "zip_code"   => "90210"
      );
      
      foreach($person as $att => $value){
          echo $att . " - " . $value . "<br/>";
      }
      ?>
    
    
    })




</body>
</html>