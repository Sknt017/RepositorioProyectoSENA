<?php
    include "config/_connection.php";
?>
<table id="maint">
<caption>Productos</caption>
    <thead>
        <tr>
            <th id="idP">Identificacion</th>
            <th id="naP">Nombre</th>
            <th id="maP">Marca</th>
            <th id="tiP">tipo</th>
            <th id="vaP">Valor</th>
            <th id="sta">Estado</th>
            <th id="opt">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sql="SELECT * FROM productos inner join marcas WHERE productos.id_mar = marcas.id && StatusP = 0;";
            $result=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_array($result)){
                if($row['StatusP']==0){
                    $opt="Enable";
                }else if($row['StatusP']==1){
                    $opt="Disable";
                }
                echo '<tr>
                        <td>'.$row['IdPro'].'</td>'.'
                        <td>'.$row['NomPro'].'</td>'.'
                        <td>'.$row['nombre'].'</td>'.'
                        <td>'.$row['TiPro'].'</td>'.'
                        <td>'.$row['PriPro'].'</td>'.'
                        <td>'.$row['StatusP'].'</td>'.'
                    <td>
                <div class="div-flex">
                    <button onclick="editP('.$row['IdPro'].')">Editar</button>
                    <button onclick="ChaSta('.$row['IdPro'].','.$row['StatusP'].')">'.$opt.'</button>
                </div>
            </td>
        </tr>';
                }
        ?>        
    </tbody>
</table>