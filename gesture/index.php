<?php
    session_start();
    if($_SESSION["rol"] == 2|| !isset($_SESSION["rol"])){
        header('Location: ../index.php');
        echo ' this works';
    }else if ($_SESSION["rol"] == 1){
        echo 'Welcome '. $_SESSION["Fname"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <!-- <link rel="stylesheet" href="css/index.css"> -->
</head>
<body>
    <button onclick="Login()">Get access</button>
    <script type="text/javascript">
        function Login(){
            window.location.href='main.php';
        }
    </script>
</body>
</html>