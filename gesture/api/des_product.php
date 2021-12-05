<?php 
    include "../config/_connection.php";
    $response=new stdClass();

    $IdPro = $_POST['IdPro'];
    $StatusP = $_POST['StatusP'];
    if($StatusP==0){
        $sql="UPDATE productos SET StatusP = '1' WHERE productos.IdPro=$IdPro;";
    }else if($StatusP==1){
        $sql="UPDATE productos SET StatusP = '0' WHERE productos.IdPro=$IdPro;";
    }
    $result=mysqli_query($conn, $sql);
    if($result){
        $response->state=true;
    }else{
        $response->state=false;
        $response->detail="Error Disa Pro";
    }
    echo json_encode($response);
?>