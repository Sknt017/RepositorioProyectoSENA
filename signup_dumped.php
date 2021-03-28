<?php 
    include 'resources/_connection.php';
    $message = '';
    $Email = $_POST['Email'];
    $sql="SELECT * FROM usuarios WHERE Email='$email'";
    $result=mysqli_query($conn, $sql);
    if($result){
        $row=mysqli_fetch_array($conn, $sql);
        $count=mysqli_num_rows($result);
        if($count==0){
            $password = $_POST['password'];
            $Cpassword = $_POST['confirm_password'];
            if($password !=$Cpassword){
                $message = "error";
            }else{
                $sql = "INSERT INTO usuarios(Email, Pass, Fname, Lname) VALUES ('$Email','$pass','$Fname','$Lname')";
                $result = mysqli_query($conn, $sql);
                $IdUsu=musqli_insert_id($conn);
                session_start();
                $_SESSION['IdUsu']=$IdUsu;
                $_SESSION['Email']=$Email;
                $_SESSION['pass']=$pass;
                header('Location: ../');
            }
        }
    }
    // $message = '';

    // if ($_POST["password"] != $_POST["confirm_password"]){
    //     $message = 'Password Error';
    // }else{
    //     if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['Fname']) && !empty($_POST['Lname'])){
    //         $Email = $_POST['Email'];
    //         $password = $_POST['password'];
    //         $Fname = $_POST['Fname'];
    //         $Lname = $_POST['Lname'];
    //         $sql = "INSERT INTO usuarios(Email, Pass, Fname, Lname) VALUES ('$Email',' $password','$Fname','$Lname')";
    //         $result = mysqli_query($conn, $sql);
    //         $IdUsu = mysqli_insert_id($conn);
    //         session_start();
    //         $_SESSION['IdUsu']=$IdUsu;
    //         $_SESSION['Email']=$Email;
    //         $_SESSION['Pass']=$password;
    //         header('Location: ../');            // $stmt = $conn->mysqli_prepare($sql);
            // $result = mysqli_prepare($conn, $sql);
            // $result = $conn->mysqli_stmt_bind_param(':email', $_POST['email']);
            // $result = $conn->mysqli_stmt_bind_param(':Fname', $_POST['Fname']);
            // $result = $conn->mysqli_stmt_bind_param(':Lname', $_POST['Lname']);
            // $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            // $result = $conn->mysqli_stmt_bind_param(':pass', $password);
            // $result = mysqli_stmt_execute($sql);
            // if($result->execute()){
            //     $message = 'the user has been created successfully.';
            // } else {
            //     $message = 'something went wrong';
            // }
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <link rel="stylesheet" href="resources/css/index.css">
    <style>
/* 
        header{
            font-weight: bold;
            background: lightgrey;
        }

        body {
            background-image: linear-gradient(120deg,#3498db,#8e44ad);
        } */
        .log {
            padding: 40px 20px;
            margin: 3% 32%;
            background: lightgrey;
            border-radius: 20px;
        }
    
    </style>
</head>
<body>
    <?php # require './partials/header.php'?>
    <?php require 'assets/header.php'?>

    <?php if(!empty($message)):?>
    <p><?= $message ?></p>
<?php endif; ?>
<div class="main-content">
    <div class="content-page">
        <form action="signup.php" method="post">
            <h1>SingUp</h1><br><br>
                <input type="text" name="email" placeholder="enter your email">
                <input type="text" name="fname" placeholder="first name">
                <input type="text" name="lname" placeholder="last name">
                <input type="password" name="password" placeholder="enter your password">
                <input type="password" name="confirm_password" placeholder="Confirm your password">
                <input type="submit" value="Send">   
                <br>
                <span>Already have an account?  <a href="login.php">LogIn</a></span>
            </div>
        </form>
    </div>
    
</body>
</html>