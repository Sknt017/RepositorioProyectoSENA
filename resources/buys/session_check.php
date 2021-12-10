<?php
session_start();
include_once('../_connection.php');
$response=new stdClass();
if (!isset($_SESSION['IdUsu'])) {
	$response->state=false;
	$response->detail="No esta logeado";
	$response->open_login=true;
}else{
    $idU=$_SESSION['IdUsu'];
    $pr=$_POST['IdPro'];
    $sql="SELECT * FROM orders WHERE IdUsu = $idU && IdPro = $pr";
    $result=mysqli_query($conn, $sql);
    if ($result) {
        $row=mysqli_fetch_array($result);
        $j=$row['quant'];
        $ped=$row['IdPed'];
        if ($j>=1) {
            $r=$j+1;
            $sql="UPDATE orders SET quant = $r WHERE orders.IdPed = $ped && IdPro=$pr;";
            $result=mysqli_query($conn, $sql);
            if ($result) {
                $response->CurQua=$j;
                $response->NewQua=$r;
                $response->state=true;
                $response->detail="Producto añadido correctamente";
            } else {
                $response->state=false;
                $response->detail="Error al agregar producto.";
            }
        }else{
			$IdUsu=$_SESSION['IdUsu'];
			$IdPro=$_POST['IdPro'];
			$sql="INSERT INTO orders(IdUsu,IdPro,DateOr,DirOr,quant, Status) VALUES ($IdUsu,$IdPro,now(),'',1,3)";
			$result=mysqli_query($conn,$sql);
			if ($result){
				$response->state=true;
				$response->detail="Producto añadido correctamente";
				}else{
					$response->state=false;
					$response->detail="Error al agregar producto.";
			}
		}
	}
}
	header('Content-Type: application/json');
	echo json_encode($response);
	mysqli_close($conn);
?>
