<?php 
    $host = 'b9vhkvkdciiu9cytfoca-mysql.services.clever-cloud.com';
    $name = 'b9vhkvkdciiu9cytfoca';
    $user = 'upwqaxpjlpxnkc9p';
    $pass = 'MW2Rk8rWo94BtmxNeynH';

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
