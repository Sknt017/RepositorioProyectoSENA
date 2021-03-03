<?php
session_start();
$response=new stdClass();

if (!isset($_SESSION['IdUsu'])) {
	$response->state=false;
	$response->detail="No esta logeado";
	$response->open_login=true;
}else{
	// include_once('../_conexion.php');
    $response->state=true;
    $response->detail="inicio de sesion correcto";
	// $codusu=$_SESSION['IdUsu'];
	// $codpro=$_POST['IdPro'];
	// $sql="INSERT INTO pedido
	// (codusu,codpro,fecped,estado,dirusuped,telusuped)
	// VALUES
	// ($codusu,$codpro,now(),1,'','')";
	// $result=mysqli_query($con,$sql);
	// if ($result) {
	// 	$response->state=true;
	// 	$response->detail="Producto agregado";
	// }else{
	// 	$response->state=false;
	// 	$response->detail="No se pudo agregar producto. Intente más tarde";
	// }
	// mysqli_close($conn);
}

header('Content-Type: application/json');
echo json_encode($response);
?>
