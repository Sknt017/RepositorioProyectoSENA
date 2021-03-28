<?php 
    #1 = error de conexion.
    #2 = error de email.
    #3 = error de contraseña.
    include ('_connection.php');
    $email=$_POST['Email'];
    // $password=$_POST['password'];
    $sql = "SELECT * FROM Usuarios WHERE Email='$email'";
    $result=mysqli_query($conn, $sql);
    if($result){
        $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        if($count!=0){
            $pass = $_POST['Pass'];
            $check = $row['Pass'];
            $pass2 = $_POST['Pass'];
            // $test = password_verify($pass, $check);
            if(password_verify($pass, $check)){
                session_start();
                $_SESSION['IdUsu']=$row['IdUsu'];
                $_SESSION['Email']=$row['Email'];
                $_SESSION['Fname']=$row['Fname'];
                header('Location: ../index.php');
            }else{
                // echo var_dump($row['Pass']);
                // echo var_dump($pass);
                // echo var_dump($pass2);
                // echo var_dump($check);
                // echo var_dump($test);
                // print_r(password_get_info($check));
                header('Location: ../login.php?e=3');
            }; 
                // if($row['Pass']!=$pass){
                // }else{
                //     session_start();
                // }

            }else{
            header('Location: ../login.php?e=2');
                
        }
        }else{
            header('Location: ../login.php?e=1');
        }
?>