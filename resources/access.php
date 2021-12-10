<?php 
    #1 = error de conexion.
    #2 = error de email.
    #3 = error de contraseña.
    include ('_connection.php');
    $email=$_POST['Email'];
    $sql = "SELECT * FROM Usuarios WHERE Email='$email'";
    $result=mysqli_query($conn, $sql);
    if($result){
        $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        if($count!=0){
            $pass = $_POST['Pass'];
            $check = $row['Pass'];
            $pass2 = $_POST['Pass'];
            $rol = $row['id_Rol'];
            if(password_verify($pass, $check)){
                session_start();
                $_SESSION['rol']=$rol;
                $_SESSION['IdUsu']=$row['IdUsu'];
                $_SESSION['Email']=$row['Email'];
                $_SESSION['Fname']=$row['Fname'];
                if($rol == 2){
                    echo 'cliente';
                    header('Location: ../index.php');
                }else if($rol == 1){
                    echo 'admin';
                    header('Location: ../gesture/');
                }
            }else{
                header('Location: ../login.php?e=3');
            }
        }else{
            header('Location: ../login.php?e=2');
                
        }
        }else{
            header('Location: ../login.php?e=1');
        }
?>