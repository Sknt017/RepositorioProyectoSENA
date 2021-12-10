<?php
include '../config/_connection.php';
$response= new stdClass();

$IdPro=$_POST['IdPro'];
$sql="SELECT * FROM productos inner join marcas WHERE productos.id_mar = marcas.id && IdPro=$IdPro";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
include 'proObj.php';
$response->product=$obj;

echo json_encode($response);
