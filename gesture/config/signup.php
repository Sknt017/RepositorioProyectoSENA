<?php 
    require '_connection.php';
    error_reporting(0);
    $message = '';
    if($_POST['password']!=$_POST['confirm_password']){
        $message="confirm your password on the fields";
    }
    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $Email=$_POST['email'];
        $Fname=$_POST['Fname'];
        $Lname=$_POST['Lname'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT, array("cost" => 12));
        $sql = "INSERT INTO Usuarios(Email, Pass, Fname, Lname, id_Rol) VALUES ('$Email', '$password','$Fname','$Lname', 1)";
        $result=mysqli_query($conn, $sql);
    if($result){
        $message = 'the user has been created successfully.';
        echo 'the user has been created successfully.';
        header('Location: ../index.php');
    } else {
        $message = 'something went wrong';
    }
    }
?>
