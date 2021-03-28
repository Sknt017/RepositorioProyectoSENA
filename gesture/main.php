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
            <h3>Añadir Producto</h3>
            <form action="" id="insert-form-product">
                <div class="div-flex">
                    <h2>Nombre: </h2>
                    <input type="text" id="Name">
                </div>
                <div class="div-flex">
                    <h2>Marca: </h2>
                    <input type="text" class="Brand">
                </div>
                <div class="div-flex">
                    <h2>Precio: </h2>
                    <input type="text" class="Price">
                </div>
                <div class="div-flex">
                    <h2>Ruta de imagen: </h2>
                    <input type="text" class="Img">
                </div>

            </form>
            <button onclick="Shide('modal-product')">Cancelar</button>
            <button onclick="save_product()">Cancelar</button>
        </div>
    </div>
   <div class="main-container">
        <div class="body-nav-bar">
            <img src="resources/logo/walking-solid.svg" alt="">
            <center>
                <h1>Administrator</h1>
            </center>
            <ul>
                <li><a href="">111</a></li>
                <li><a href="">111</a></li>
                <li><a href="">111</a></li>
            </ul>
        </div>
        <div class="body-pags">
            <h1>Productos</h1>
            <table>
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
            <button onclick="Smodal('modal-product')">Añadir...</button>
        </div>
   </div> 
   <script type="text/javascript">
        function Smodal(id){
            document.getElementById(id).style.display="block";
        }
        function Shide(id){
            document.getElementById(id).style.display="none";
        }
        function save_product(){
            let fd=new FormData();
            fd.append('Name', document.getElementById('Name').value);
            fd.append('Brand', document.getElementById('Brand').value);
            fd.append('Price', document.getElementById('Price').value);
            fd.append('Img', document.getElementById('Img').value);
            Let request=new XMLHttpRequest();
            request.open('POST','api/product_save.php',true);
            reques.onload=function(){
                console.log(request);
            }
            request.send(fd);
        }
</script>
</body>
</html>
