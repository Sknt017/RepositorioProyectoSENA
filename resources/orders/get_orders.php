<?php 
    include "../_connection.php";
    $response= new stdClass();
    
    $data=[];
    $i=0;
    $sql='SELECT *,ord.status statusOr FROM orders ord inner join productos pro on ord.IdPro=pro.IdPro where ord.status = 0';
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_array($result)){
        $obj=new stdClass();
        $obj->IdOrd=$row['IdOrd'];
        $obj->IdPro=$row['IdPro'];
        $obj->NomPro=$row['NomPro'];
        $obj->MarPro=$row['MarPro'];
        $obj->DateOr=$row['DateOr'];
        $obj->DirOr=utf8_encode($row['DirOr']);
        $obj->PriPro=$row['PriPro'];
        $obj->status=numberChanger($row['statusOr']);
        $obj->Img=$row['Img'];
        $data[$i]=$obj;
        $i++;
    }
    $response->data=$data;
    function numberChanger($id){
        switch ($id) {
            case 1:
                return "Processing";
                break;
            case 0:
                return "Waiting payment";
                break;
        }
    }

    mysqli_close($conn);
    header('Content-Type: application/json');
    echo json_encode($response);
?>
