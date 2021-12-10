
<?php 
    require 'resources/_connection.php';
?>
<div class="container-fluid">
            <div class="row">
                <div class="">
                    <h2>Filtrar</h2>
                    <div class="title-section">marcas</div>
                    
                    <select name="" id="brand">
                        <option value="">Todos los productos</option>
                    <?php 
                    $sql="SELECT * FROM marcas;";
                    $result=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($result))
                    {
                        echo '<option value="'.$row['id'].'">'.$row['nombre']. '</option>';
                    }
                    ?>
                    </select>

            </div>
        </div>
    </div>