<?php 
    session_start();
    $idU = $_SESSION['IdUsu'];
    include "../_connection.php";
    $response=new stdClass();
    $data=[];
    $i=0;
    $sql = "SELECT *,ord.Status statusOr FROM orders ord inner join productos pro inner join marcas mar on ord.IdPro=pro.IdPro && pro.id_mar = mar.id where ord.status = 1 && Idusu = $idU";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($result)){
        $obj=new stdClass();
        $obj->IdOrd=$row['IdPed'];
        $obj->IdPro=$row['IdPro'];
        $obj->NomPro=$row['NomPro'];
        $obj->MarPro=$row['nombre'];
        $obj->DateOr=$row['DateOr'];
        $obj->DirOr=utf8_encode($row['DirOr']);
        $obj->PriPro=$row['PriPro'];
        $obj->status=numberChanger($row['statusOr']);
        $obj->Img=$row['Img'];
        $data[$i]=$obj;
        $i++;
    };
    $response->data=$data;
    function numberChanger($id){
        switch ($id) {
            case 1:
                return "Processing";
                break;
            case 2:
                return "Waiting payment";
                break;
        }
    }

    mysqli_close($conn);
    header('Content-Type: application/json');
    echo json_encode($response);
?>
