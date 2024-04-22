<?php
declare(strict_types=1);

function mostrarDenuncia(){
    echo"<div class='tres-columnas'>
                            <div class='dato'>
                            <h4 class='titulo'>Ubicación del delito</h4>
                            <div class='dos-columnas'>";
                            // Obtiene el ID del registro de la URL y lo limpia
                            $id = htmlspecialchars($_GET['id']);
                            
                            // Establece la conexión a la base de datos
                            require_once '../includes/dbh.inc.php';
                            
                            // Realiza la consulta para obtener los detalles del registro con el ID proporcionado
                            $consulta = "SELECT 
                            d.*,
                            estados.nombre AS nombre_estado,
                            municipios.nombre AS nombre_municipio
                        FROM 
                            (SELECT * FROM denuncia WHERE id = :id) AS d
                        INNER JOIN 
                            municipios ON d.ubicacion = municipios.id
                        INNER JOIN 
                            estados ON municipios.estado = estados.id;";
                            $stmt = $pdo->prepare($consulta);
                            $stmt->execute(array(':id' => $id));
                            
                                // Obtiene los datos del registro
                                $fila = $stmt->fetch(PDO::FETCH_ASSOC);
                                    echo "<div>";
                                    echo "<p class='datos'>ESTADO</p>";
                                    echo "<p>" . $fila['nombre_estado'] . "</p>";
                                    echo "</div>";
                                    echo "<div>";
                                    echo "<p class='datos'>MUNICIPIO</p>";
                                    echo "<p>" . $fila['nombre_municipio'] . "</p>";
                                    echo "</div>";


                            echo"</div></div>";
                            echo"<div class='dato'>";
                            echo "<h4 class='titulo'>Temporalidad</h4>";
                            echo "<div class='dos-columnas'>";
                                echo "<div>";
                                echo "<p class='datos'>FECHA</p>";
                                echo "<p>" . $fila['fecha'] . "</p>";
                                echo "</div>";
                                echo "<div>";
                                echo "<p class='datos'>HORA</p>";
                                echo "<p>" . $fila['hora'] . "</p>";
                                echo "</div>";
                            echo "</div>
                            </div>";
                            echo "<div class='dato'>";
                            echo "<h4 class='titulo'>Persona involucrada</h4>";
                            echo " <div class='columnas3 x'>";
                            echo "<div>";
                            echo " <p class='datos'>NOMBRE</p>";
                                echo "<p>" . $fila['nombreSosp'] . "</p>";
                            echo "</div>";
                            echo "<div>";
                            echo "<p class='datos'>ROL</p>";
                                echo "<p>" . $fila['rolSosp'] . "</p>";
                            echo "</div>";
                            echo"<div>";
                            echo "<p class='datos'>INSTITUCIÓN</p>";
                                echo "<p>" . $fila['instSosp'] . "</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='tres-columnas2'>";
                            echo "<div class='dato'>
                            <h4 class='titulo'>
                                Descripción de los hechos
                            </h4>
                            <div>";
                                echo "<p>" . $fila['descripcion'] . "</p>";
                            echo" </div>
                            </div>
                            <div class='dato'>
                                <h4 class='titulo'>
                                    Conductas cometidas
                                </h4>
                                <div>";
                                $id = htmlspecialchars($_GET['id']);
                                $sql1 = "SELECT conducta.nombreCond, conducta.tipo
                                FROM conducta
                                INNER JOIN denunciaconducta ON conducta.id = denunciaconducta.id_conducta
                                WHERE denunciaconducta.id_denuncia = :id
                                ORDER BY conducta.tipo";

                                $stmt2 = $pdo->prepare($sql1);
                                $stmt2->execute(array(':id' => $id));

                                    echo '<div class="">';
                                    while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<p><strong>' . $row["nombreCond"] . '</strong> - Tipo: ' . $row["tipo"] . '</p>';
                                }

                                echo '</div>';
                                echo " </div>
                                </div>
                                <div class='dato'>
                                    <h4 class='titulo'>
                                        Evidencia
                                    </h4>
                                    <div class='datos'>
                                    </div>
                                </div>
                            </div>";
} 