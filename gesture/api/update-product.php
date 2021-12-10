<?php 
    include "../config/_connection.php";
    $response = new stdClass();
    $IdPro=$_POST['IdPro'];
    $NomPro=$_POST['Name'];
    $IdMar=$_POST['Brand'];
    $TiPro=$_POST['Type'];
    $PriPro=$_POST['Price'];
    $StatusP=$_POST['StatusP'];
    $Img=$_POST['Img'];
    
    if($IdPro==""){
        $response->state=false;
        $response->detail="Missing id of the product";
    }else{
        $sql="UPDATE productos SET NomPro= '$NomPro', id_mar=$IdMar, TiPro = '$TiPro', PriPro = $PriPro, StatusP=$StatusP, Img = '$Img' WHERE `productos`.`IdPro` = $IdPro;";
        $result=mysqli_query($conn, $sql);
        if($result){
        $response->state=true;
        }else{
        $response->state=false;
        $response->detail="error al agregar el producto";
        }
    }
    
    ECHO json_encode($response);
    ?>