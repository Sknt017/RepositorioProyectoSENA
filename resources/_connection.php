<?php 
    $host = 'localhost';
    $name = 'onfeet';
    $user = 'guest';
    $pass = 'rorTKXrhkp3l4Wyh';

    // try {
    // pass: '1*g998YWvsKuG9UA'
    //     $conn = new PDO("mysql:host=$host;dbname=$name",$user,$pass);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "online";
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }
        try{
            $conn=mysqli_connect($host, $user, $pass, $name);

        }catch(PDOException $e){
            echo $e->getMessage();
        }


?>
