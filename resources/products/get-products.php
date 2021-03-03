<?php 
    include "../_connection.php";
    $response= new stdClass();
    
    $data=[];
    $i=0;
    $sql='SELECT * FROM productos';
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($result)){
        $obj=new stdClass();
        $obj->IdPro=$row['IdPro'];
        $obj->NomPro=$row['NomPro'];
        $obj->MarPro=$row['MarPro'];
        $obj->TiPro=$row['TiPro'];
        $obj->PriPro=$row['PriPro'];
        $obj->Img=$row['Img'];
        $data[$i]=$obj;
        $i++;
    }
    $response->data=$data;

    mysqli_close($conn);
    header('Content-Type: application/json');
    echo json_encode($response);
?>