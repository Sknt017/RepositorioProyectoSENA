<?php
session_start();
$response=new stdClass();

if (!isset($_SESSION['IdUsu'])) {
	$response->state=false;
	$response->detail="No esta logeado";
	$response->open_login=true;
}else{
	include_once('../_connection.php');
	$IdUsu=$_SESSION['IdUsu'];
	$IdPro=$_POST['IdPro'];
	$sql="INSERT INTO orders(IdUsu,IdPro,DateOr,DirOr,Status) VALUES ($IdUsu,$IdPro,now(),'',1)";
	$result=mysqli_query($conn,$sql);
    // $response->detail="inicio de sesion correcto";
	if ($result) {
		$response->state=true;
		$response->detail="Producto añadido correctamente";
	}else{
		$response->state=false;
		$response->detail="Error al agregar producto.";
	}
	mysqli_close($conn);
}

header('Content-Type: application/json');
echo json_encode($response);
?>
