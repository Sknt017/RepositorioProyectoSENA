<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="resources/css/index.css">
    <style>
    </style>
</head>
<body>
    <?php include "assets/header_logo.php";?>
    <!-- <header>
        <div class="logo"><a href="index.php"><img src="resources/walking-solid.svg" alt="">OnFeet</a></div>
    </header> -->
    <div class="main-content">
        <div class="content-page">
        <form action="resources/access.php" method="POST">
            <h1>Log in</h1>
            <input type="text" name="Email" placeholder="Email Adress" class="text">
            <input type="password" name="Pass" placeholder="Password" class="password">
            <?php 
                if(isset($_GET['e'])) {
                    switch($_GET['e']){
                        case '1':
                            echo '<p>error de conexion</p>';
                            break;
                        case '2':
                            echo '<p>error de email</p>';
                            break;
                        case '3':
                            echo '<p>error de contraseña</p>';
                            break;

                    }

                }
            ?>
            <button type="submit" >Send</button>
            <br>
            <span>Don't have an account? <a href="signup.php">Sign Up</a></span>
            <?php #echo var_dump($row)?>
        </form>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</body>
</html>
