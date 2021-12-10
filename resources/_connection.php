<?php 
    $host = 'localhost';
    $name = 'onfeet';
    $user = 'guest';
    $pass = 'rorTKXrhkp3l4Wyh';
    try{
        $conn=mysqli_connect($host, $user, $pass, $name);
    }catch(PDOException $e){
        echo $e->getMessage();
}


?>
