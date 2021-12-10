<?php 
    include "config/_connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request access</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="modal" id="modal-product" style="display: none;">
        <div class="body-modal">
            <?php include 'api/product-form.php' ?>
        </div>
    </div>
    <div class="modal" id="modal-product-edit" style="display: none;">
        <div class="body-modal">
            <?php include 'resources/product-form-edit.php' ?>
        </div>
    </div>
    
   <div class="main-container">
        <div class="body-nav-bar">
            <img src="resources/logo/walking-solid.svg" alt="">
                <div id="tl1" style="justify-content: center; text-align: center;">
                    <h1>Administrator</h1>
                </div>
            <ul>
                <li><a href="">lista de productos</a></li>
                <li><a onclick="showPed()">lista de pedidos</a></li>
                <li><a onclick="showDp()">Ver Productos Deshabilitados</a></li>
                <li><a onclick="showAd()">Añadir Administrador</a></li>
                <li><a href="../logout.php">Salir</a></li>
            </ul>
        </div>
        <div class="body-pags">
            <div id="tprod">
                <h1>Productos</h1>
                    <?php include 'products.php' ?> 
                <button onclick="Smodal('modal-product')">Añadir...</button>
            </div>
            <div id="tped" class="tped" style="display: none;">
                <h1>Pedidos</h1>
                    <?php include 'Orders.php' ?>
            </div>
            <div id="DisPro" class="tped" style="display: none;">
                <h1>Productos Deshabilitados</h1>
                    <?php include 'DisProducts.php' ?>
            </div>
            <?php if(!empty($message)):?>
    <p><?= $message ?></p>
        <?php endif; ?>
            <div class="log" id="log" style="display: none;">
                <form action="config/signup.php" method="post">
                    <h1>Nuevo Administrador</h1>
                        <input type="text" name="email" placeholder="enter your email"><br>
                        <input type="text" name="Fname" placeholder="enter your first name"><br>
                        <input type="text" name="Lname" placeholder="enter your last name"><br>
                        <input type="password" name="password" placeholder="enter your password"><br>
                        <input type="password" name="confirm_password" placeholder="Confirm your password"><br>
                        <button type="submit">Send</button>
                    <br>
                </form>
            </div>
        </div>
   </div> 
</body>
<script src="config/script.js"></script>
</html>
