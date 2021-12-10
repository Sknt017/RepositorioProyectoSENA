<?php 
    $obj=new stdClass();
    $obj->IdPro=$row['IdPro'];
    $obj->NomPro=utf8_encode($row['NomPro']);
    $obj->IdMar=$row['id_mar'];
    $obj->MarPro=$row['nombre'];
    $obj->TiPro=utf8_encode($row['TiPro']);
    $obj->PriPro=$row['PriPro'];
    $obj->Img=$row['Img'];
?>