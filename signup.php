<?php

use GuzzleHttp\Psr7\Message;

require 'resources/_connection.php';
    error_reporting(0);
    $message = '';
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // header('Location: ../login.php?e=4');
        $message="INVALID EMAIL";
    }else if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['Fname']) && preg_match("/^([a-zA-Z' ]+)$/",$_POST['Lname'])){
        if ($_POST['password']!=$_POST['confirm_password']) {
            $message="confirm your password on the fields";
        } else {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $Email=$_POST['email'];
                $Fname=$_POST['Fname'];
                $Lname=$_POST['Lname'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT, array("cost" => 12));
                $sql = "INSERT INTO usuarios(Email, Pass, Fname, Lname, id_Rol) VALUES ('$Email', '$password','$Fname','$Lname', 2)";
                $result=mysqli_query($conn, $sql);

                if ($result) {
                    $message = 'the user has been created successfully.';
                } else {
                    $message = 'something went wrong';
                }
            }
        }
    }else {
        $message="invalid values has been inserted";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <link rel="stylesheet" href="resources/css/index.css">
</head>
<body>
    <?php require 'assets/header.php'?>

    <?php if(!empty($message)):?>
    <p><?= $message ?></p>
<?php endif; ?>

    <div class="log">
    <form action="signup.php" method="post">
    <h1>SingUp</h1>
        <input type="text" name="email" placeholder="enter your email">
        <input type="text" name="Fname" placeholder="enter your first name">
        <input type="text" name="Lname" placeholder="enter your last name">
        <input type="password" name="password" placeholder="enter your password">
        <input type="password" name="confirm_password" placeholder="Confirm your password">
        <button type="submit">Send</button>
        <br>
    <span>Already have an account?   <a href="login.php">LogIn</a></span>
    </form>
    </div>
</body>
</html>
