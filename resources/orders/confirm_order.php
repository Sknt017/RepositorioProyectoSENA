<?php 
    session_start();
    include_once('resources/_connection.php');
    $response=new stdClass();

    $IdUsu=$_SESSION['IdUsu'];
    $dirOr=$_POST['dirU'];
    $sql="UPDATE orders SET DirOr='$dirOr', Status = 3 WHERE Status = 1 && IdUsu = $IdUsu";
    $result=mysqli_query($conn, $sql);
    if($result){
        $response->state=true;
    }else{
        $response->state=false;
        $response->detail="Can't process buy";
    }
    mysqli_close($conn);
    // header('Content-type: application.json');
    // echo json_encode($response);
?>