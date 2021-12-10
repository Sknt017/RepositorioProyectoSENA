<?php 
    include "../_connection.php";
    $response= new stdClass();
    
    $data=[];
    $i=0;
    $sql='SELECT * FROM productos inner join marcas WHERE productos.id_mar = marcas.id && StatusP = 1;';
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($result)){
        include '../../gesture/api/proObj.php';
        $data[$i]=$obj;
        $i++;
    }
    $response->data=$data;
    mysqli_close($conn);
    header('Content-Type: application/json');
    echo json_encode($response);
?>