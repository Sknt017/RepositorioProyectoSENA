<?php 
    $host = 'b9vhkvkdciiu9cytfoca-mysql.services.clever-cloud.com';
    $name = 'b9vhkvkdciiu9cytfoca';
    $user = 'upwqaxpjlpxnkc9p';
    $pass = 'MW2Rk8rWo94BtmxNeynH';
        try{
            $conn=mysqli_connect($host, $user, $pass, $name);

        }catch(PDOException $e){
            echo $e->getMessage();
}?>
