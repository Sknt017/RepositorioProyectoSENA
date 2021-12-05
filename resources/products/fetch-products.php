<?php 
    include "../_connection.php";
    $response= new stdClass();
    $data=[];
    $i=0;

    if(isset($_POST['request'])){
        $request= $_POST['request'];
        // echo $request;
        if($request==""){
            $sql="SELECT * FROM productos inner join marcas WHERE productos.id_mar = marcas.id && StatusP = 1;";
            $result=mysqli_query($conn, $sql);
        }else{
            $request= $_POST['request'];
            $sql="SELECT * FROM productos inner join marcas WHERE marcas.id=$request && productos.id_mar = marcas.id && StatusP = 1;";
            $result=mysqli_query($conn, $sql);
            // var_dump($result);
        }
    }
    while($row=mysqli_fetch_array($result)){
        $obj=new stdClass();
        $obj->IdPro=$row['IdPro'];
        $obj->NomPro=$row['NomPro'];
        $obj->MarPro=$row['nombre'];
        $obj->TiPro=$row['TiPro'];
        $obj->PriPro=$row['PriPro'];
        $obj->Img=$row['Img'];
        $data[$i]=$obj;
        $i++;
    }
    $response->data=$data;
    // else{
        //     // include 'get-products.php';
        // }


    

    mysqli_close($conn);
    header('Content-Type: application/json');
    echo json_encode($response);
?>