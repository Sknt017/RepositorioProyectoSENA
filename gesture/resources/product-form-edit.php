<?php 
?>
            <h3>Editar Producto</h3>
                <form action="" id="form-product-edit">
                <div class="div-flex">
                        <h2>Identificacion: </h2>
                        <input type="text" id="IdPro-e" disabled>
                    </div>
                    <div class="div-flex">
                        <h2>Nombre: </h2>
                        <input type="text" id="Name-e">
                    </div>
                    <div class="div-flex">
                        <h2>Id de marca: </h2>
                    <input type="number" class="Brand" id="Brand-e">
                </div>
                <div class="div-flex">
                    <h2>Tipo: </h2>
                    <input type="text" id="Type-e">

                </div>
                <div class="div-flex">
                    <h2>Precio: </h2>
                    <input type="number" id="Price-e">
                </div>
                <div class="div-flex">
                    <h2>Estado: </h2>
                    <select id="StatusP-e">
                        <option value="0">Deshabilitado</option>
                        <option value="1">Habilitado</option>
                    </select>
                </div>
                <div class="div-flex">
                    <h2>Ruta de imagen: </h2>
                    <input type="text" id="Img-e">
                </div>
    </form>
    <button onclick="Shide('modal-product-edit')">Cancelar</button>
    <button onclick="update_product()">Guardar</button>

