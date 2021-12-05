<?php 
    // include '../config/_connection.php';
    // $sql="SELECT * FROM marcas";
    // $result=mysqli_query($conn,$sql);
    // $row=mysqli_fetch_array($result);
    // // var_dump($result);
    // // var_dump($row);
    //  while($row=mysqli_fetch_array($result))
    // {
    //     echo ' ' . $row['nombre'];
    // }
?>
            <h3>Añadir Producto</h3>
                <form action="" id="insert-form-product">
                    <div class="div-flex">
                        <h2>Nombre: </h2>
                        <input type="text" id="Name">
                    </div>
                    <div class="div-flex">
                        <h2>Id de marca: </h2>
                        <!-- <select name="" id="brand"> -->
                    <?php 
                    $sql="SELECT * FROM marcas;";
                    $result=mysqli_query($conn,$sql);
                    // echo '<select name="" id="brand">';
                    while($row=mysqli_fetch_array($result))
                    {
                        //echo '<option value="'.$row['nombre'].'">'.$row['nombre']. '</option>';
                    }
                    // echo '</select>';
                    ?>
                        <!-- </select> -->
                    <input type="number" class="Brand" id="Brand">
                </div>
                <div class="div-flex">
                    <h2>Tipo: </h2>
                    <input type="text" id="Type">

                </div>
                <div class="div-flex">
                    <h2>Precio: </h2>
                    <input type="number" id="Price">
                </div>
                <div class="div-flex">
                    <h2>Ruta de imagen: </h2>
                    <input type="text" id="Img">
                </div>
    </form>
    <button onclick="Shide('modal-product')">Cancelar</button>
    <button onclick="save_product()">Guardar</button>

