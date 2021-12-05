<?php
    include "config/_connection.php";
?>
<table>
                    <thead>
                        <tr>
                            <th>Identificacion</th>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>tipo</th>
                            <th>Valor</th>
                            <th>Estado</th>
                            <!-- <th>Imagen</th> -->
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql="SELECT * FROM productos inner join marcas WHERE productos.id_mar = marcas.id;";
                            $result=mysqli_query($conn,$sql);
                            while ($row=mysqli_fetch_array($result)){
                                $opt="";
                                if($row['StatusP']==0){
                                    $opt="Enable";
                                }else if($row['StatusP']==1){
                                    $opt="Disable";
                                };
                                echo '<tr>
                                        <td>'.$row['IdPro'].'</td>
                                        <td>'.$row['NomPro'].'</td>
                                        <td>'.$row['nombre'].'</td>
                                        <td>'.$row['TiPro'].'</td>
                                        <td>'.$row['PriPro'].'</td>
                                        <td>'.$row['StatusP'].'</td>
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