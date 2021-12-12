<?php 
    #1 = error de conexion.
    #2 = error de email.
    #3 = error de contraseña.
    include ('_connection.php');
    // $stmt = $conn->prepare("SELECT * FROM Usuarios WHERE Email=:email;");
    // $stmt->bind_param();
    $email=$_POST['Email'];
    // $sql = "SELECT * FROM Usuarios WHERE Email = ?";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ../login.php?e=2');
    } else {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE Email = ?");
        $stmt->bind_param('s', $_POST['Email']);
        $stmt->execute();
   
        $result = $stmt->get_result();
        // echo $email;
        // $result=mysqli_query($conn, $sql);
        if ($result) {
            $row=mysqli_fetch_array($result);
            $count=mysqli_num_rows($result);
            if ($count!=0) {
                $pass = $_POST['Pass'];
                $check = $row['Pass'];
                $pass2 = $_POST['Pass'];
                $rol = $row['id_Rol'];
                if (password_verify($pass, $check)) {
                    session_start();
                    $_SESSION['rol']=$rol;
                    $_SESSION['IdUsu']=$row['IdUsu'];
                    $_SESSION['Email']=$row['Email'];
                    $_SESSION['Fname']=$row['Fname'];
                    if ($rol == 2) {
                        echo 'cliente';
                        header('Location: ../index.php');
                    } elseif ($rol == 1) {
                        echo 'admin';
                        header('Location: ../gesture');
                    }
                } else {
                    header('Location: ../login.php?e=3');
                }
            } else {
                header('Location: ../login.php?e=2');
            }
        } else {
            header('Location: ../login.php?e=1');
        }
    }
?>