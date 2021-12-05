<?php
include '../config/_connection.php';
$response= new stdClass();

$IdPro=$_POST['IdPro'];
// echo $_POST['IdPro'];
$sql="SELECT * FROM productos WHERE IdPro=$IdPro";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
$obj=new stdClass();
$obj->NomPro=utf8_encode($row['NomPro']);
$obj->IdMar=$row['id_mar'];
$obj->TiPro=utf8_encode($row['TiPro']);
$obj->PriPro=$row['PriPro'];
$obj->Img=$row['Img'];
$response->product=$obj;

echo json_encode($response);
