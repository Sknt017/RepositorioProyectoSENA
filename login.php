<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/index.css">
    <style>
            form{
            max-width: 460px;
            width: calc(100% - 40px);
            padding: 15px;
            background: #ccc;
            margin: auto;
        }
        form h1 {
            margin: 5px 0;
            
        }
        form input{
            padding: 7px 0;
            width: calc(100% - 22px);

        }
        form button {
            padding: 10px 15px;
            width: calc(100% - 22px);
        }
        form p{
            color: red;
            margin: 0px;
            font-size: 15px;
        }
        .logo a{
            text-decoration: none;
            color: #000;
            font-family: sans-serif;
            
        }
    </style>
</head>
<body>
    <header>
        <div class="logo"><a href="index.php"><img src="resources/walking-solid.svg" alt="">OnFeet</a></div>
    </header>
    <div class="main-content">
        <div class="content-page">
        <form action="resources/access.php" method="POST">
            <h1>Iniciar Sesion</h1>
            <input type="text" name="Email" placeholder="Correo" class="text">
            <input type="password" name="Pass" placeholder="Contraseña" class="password">
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
            <button type="submit" >Acceder</button>
        </form>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</body>
</html>
