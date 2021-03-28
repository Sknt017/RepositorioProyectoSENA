<?php 
    $host = 'localhost';
    $name = 'onfeet';
    $user = 'root';
    $pass = '';

    // try {
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
