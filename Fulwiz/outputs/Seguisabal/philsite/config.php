<?php
    /*host, databasename, user, password */
    $host = 'localhost';
    $mydatabase = 'philhealth';
    $username = 'root';
    $password = '';

    try
        {
            //establish connection inside the database
            $conn = new PDO("mysql:host={$host};dbname={$mydatabase}", $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            
            //to try if the PDO is working
            //echo "PDO Connection Success";
        }
    catch(PDOException $e) 
        {
            echo $e->getMessage();
        }
         

?>