<?php
    include "config/_connection.php";
?>
<table>
                    <thead>
                        <tr>
                            <th>Id Pedido</th>
                            <th>Id Usuario</th>
                            <th>Id Marca</th>
                            <th>Fecha Pedido</th>
                            <th>Direccion entrega</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql="SELECT * FROM orders;";
                            $result=mysqli_query($conn,$sql);
                            while ($row=mysqli_fetch_array($result)){
                                echo '<tr>
                                        <td>'.$row['IdPed'].'</td>
                                        <td>'.$row['IdUsu'].'</td>
                                        <td>'.$row['IdPro'].'</td>
                                        <td>'.$row['DateOr'].'</td>
                                        <td>'.$row['DirOr'].'</td>
                                    <td>
                                <div class="div-flex">
                                    <button>Editar</button>
                                    <button>Deshabilitar</button>
                                </div>
                            </td>
                        </tr>';
                               }
                        ?>        
                    </tbody>
                </table>