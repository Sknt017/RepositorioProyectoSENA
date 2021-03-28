<?php 
    #1 = error de conexion.
    #2 = error de email.
    #3 = error de contraseña.
    include ('_connection.php');
    $email=$_POST['Email'];
    $sql = "SELECT * FROM Usuarios WHERE Email='$email'";
    $result=mysqli_query($conn, $sql);
    if($result ){
        $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        if($count!=0){
            $pass = $_POST['Pass']; 
            if($row['Pass']!=$pass){
                header('Location: ../login.php?e=3');
            }else{
                session_start();
                $_SESSION['IdUsu']=$row['IdUsu'];
                $_SESSION['Email']=$row['Email'];
                $_SESSION['Fname']=$row['Fname'];
                header('Location: ../index.php');
            }

        }else{
         header('Location: ../login.php?e=2');
        
        }
    }else{
        header('Location: ../login.php?e=1');
    }

?>