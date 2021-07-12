<?php 
    require '../resources/_connection.php';
    error_reporting(0);
    $message = '';

    if($_POST['password']!=$_POST['confirm_password']){
        $message="confirm your password on the fields";
    }else{
        if (!empty($_POST['Fname']) && !empty($_POST['Lname']) && !empty($_POST['password']) && !empty($_POST['NumTel'])){
            $Fname=$_POST['Fname'];
            $Lname=$_POST['Lname'];
            $NumTel=$_POST['NumTel'];
            // $pass=$_POST['password'];
            // $stmt = $conn->prepare($sql);
            // $stmt->bindParam(':email', $_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT, array("cost" => 12));
            // $stmt->bindParam(':pass', $password);
            $sql = "INSERT INTO Administradores(Pass, Fname, Lname, NumTel) VALUES ('$password','$Fname','$Lname', '$NumTel')";
            $result=mysqli_query($conn, $sql);

        if($result){
            $message = 'the user has been created successfully.';
            header('Location: main.php');
        } else {
            $message = 'something went wrong';
        }
    }
    }
?>
1