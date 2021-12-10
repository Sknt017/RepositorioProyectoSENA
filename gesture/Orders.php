<?php
    include "config/_connection.php";
?>
<table>
<caption>pedidos</caption>
    <thead>
        <tr>
            <th id="peI">Id Pedido</th>
            <th id="peU">Id Usuario</th>
            <th id="peM">Id Marca</th>
            <th id="peD">Fecha Pedido</th>
            <th id="peDi">Direccion entrega</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sql="SELECT * FROM orders;";
            $result=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_array($result)){
                echo '<tr>
                        <td>'.$row['IdPed'].'</td>'.'
                        <td>'.$row['IdUsu'].'</td>'.'
                        <td>'.$row['IdPro'].'</td>'.'
                        <td>'.$row['DateOr'].'</td>'.'
                        <td>'.$row['DirOr'].'</td>'.'
        </tr>';
                }
        ?>        
    </tbody>
</table>