<?php 
    include "config/_connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Project</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="modal" id="modal-product" style="display: none;">
        <div class="body-modal">
            <h3>Añadir Producto</h3>
            <!-- <form action="" id="insert-form-product"> -->
                <div class="div-flex">
                    <input type="text" id="id" style="display:none;">
                </div>
                <div class="div-flex">
                    <h2>Nombre: </h2>
                    <input type="text" id="Name">
                </div>
                <div class="div-flex">
                    <h2>Marca: </h2>
                    <input type="text" id="Brand">
                </div>
                <div class="div-flex">
                    <h2>Precio: </h2>
                    <input type="text" id="Price">
                </div>
                <div class="div-flex">
                    <h2>Ruta de imagen: </h2>
                    <input type="text" id="Img">
                </div>

            <!-- </form> -->
            <button onclick="Shide('modal-product')">Cancelar</button>
            <button onclick="save_product()">Guardar</button>
        </div>
    </div>
   <div class="main-container">
        <div class="body-nav-bar">
            <img src="resources/logo/walking-solid.svg" alt="">
            <center>
                <h1>Administrator</h1>
            </center>
            <ul>
                <li><!--<a href="">Add an Administrator</a>--><input class="bttnM" type="button" onclick="newA('mainTable')" value="Add an Administrator"></li>
                <li><a href="" id="bttnM">111</a></li>
                <li><a href="" id="bttnM">111</a></li>
            </ul> 
    </div>
    <div class="body-pags">
            <h1 id="titleTxt">Productos</h1>
        <table id="mainTable" style="display: block;">
                    <thead>
                        <tr>
                            <th>Identificacion</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>tipo</th>
                            <th>Valor</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql="SELECT * FROM productos";
                            $result=mysqli_query($conn,$sql);
                            while ($row=mysqli_fetch_array($result)){
                               echo '<tr>
                                        <td>'.$row['IdPro'].'</td>
                                        <td>'.$row['NomPro'].'</td>
                                        <td>'.$row['MarPro'].'</td>
                                        <td>'.$row['TiPro'].'</td>
                                        <td>'.$row['PriPro'].'</td>
                                    <td>
                                <div class="div-flex">
                                    <button>Editar</button>
                                    <button>Eliminar</button>
                                </div>
                            </td>
                     </tr>';
                            }
                        ?>
                    
                </tbody>
            </table>
            <button onclick="Smodal('modal-product')" id="addBtn">Añadir...</button>
   <div id="AdminNew" style="display: none;">
        <form action="signupAdmin.php" method="post">
                <input type="text" name="Fname" placeholder="enter your first name">
                <input type="text" name="Lname" placeholder="enter your last name">
                <input type="text" name="NumTel" placeholder="enter your phone number">
                <input type="password" name="password" placeholder="enter your password">
                <input type="password" name="confirm_password" placeholder="Confirm your password">
                <button type="submit" onclick="saveP()">Send</button>  
                <br>
            </form>
   </div>
        </div>
   </div> 
   <script type="text/javascript" src="main.js"></script>
</body>
</html>
