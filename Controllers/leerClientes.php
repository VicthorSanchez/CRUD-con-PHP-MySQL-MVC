                <?php
                  require_once('../Models/conexion.php');
                  $conexion;
                  $conexion= new conexion();
                  $conexion->conectar();
                  $sql="select * from clientes;";
                  $resultado = $conexion->conexion->query($sql);
                  foreach ($resultado as $row) {
                    echo "<tr>";
                    echo '<td style="text-align: center;">'.$row['id']. '</td>';
                    echo '<td style="text-align: center;">'.$row['codigo'].'</td>';
                    echo '<td style="text-align: center;">'.$row['nombre'].'</td>';
                    echo '<td style="text-align: center;">'.$row['apellidos'].'</td>';
                    echo '<td style="text-align: center;">'.$row['direccion'].'</td>';
                    echo '<td style="text-align: center;">'.$row['telefono'].'</td>';
                    echo '<td style="text-align: center;">'.$row['email'].'</td>';
                    echo '<td style="text-align: center;"><button class="btn btn-warning" onclick="editar(' . $row['codigo'] . ')"><span class="glyphicon glyphicon-pencil"></span></button></td>';
                    echo '<td style="text-align: center;"><button class="btn btn-danger" onclick="eliminar(' . $row['codigo'] . ', this)"><span class="glyphicon glyphicon-remove"></span></button></td>';
                    echo '</tr>';
                  }
                  $conexion->Cerrar();
                ?>