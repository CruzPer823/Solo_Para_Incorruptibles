<?php
// Iniciar sesión
session_start();

// Comprobar si existen todos los datos necesarios en la sesión
// if(!isset($_SESSION['CP']) || !isset($_SESSION['otro_dato'])) {
//     // Si falta algún dato, redirigir a la página correspondiente para completarlo
//     header('Location: Denuncia1.php');
//     exit();
// }

// Conexión a la base de datos (asumiendo que tienes un archivo database.php con esta configuración)
require './includes/database.php';

// Recuperar los datos de la sesión
$cp = $_SESSION['CP']; 
$s_e = $_SESSION['seccion_electoral'] ;
$sexo = $_SESSION['sexo']; 
$ocupacion = $_SESSION['ocupacion']; 
$escolaridad = $_SESSION['escolaridad'] ;
$explicacion = $_SESSION['explicacion'];
$estado = $_SESSION['estados'];
$municipio = $_SESSION['municipios'];
$nombre = $_SESSION['nombre'] ;
$institucion = $_SESSION['institucion'] ;
$rol = $_SESSION['rol'];
$fecha = $_SESSION['fecha'] ;
$hora = $_SESSION['hora'];
$conducta = $_SESSION['campo1'];
echo "Código Postal: $cp <br>";
    echo "Sección Electoral: $s_e <br>";
    echo "Sexo: $sexo <br>";
    echo "Ocupación: $ocupacion <br>";
    echo "Escolaridad: $escolaridad <br>";
    echo "Explicación: $explicacion <br>";
    echo "Estado: $estado <br>";
    echo "Municipio: $municipio <br>";
    echo "Nombre: $nombre <br>";
    echo "Institución: $institucion <br>";
    echo "Rol: $rol <br>";
    echo "Fecha: $fecha <br>";
    echo "Hora: $hora <br>";
    echo "Conducta: $conducta <br>";

// // Preparar la consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO denuncia (cp, seccionElectoral, sexo, ocupacion, escolaridad, descripcion, ubicacion, nombreSosp, instSosp, rolSosp, fecha, hora, conducta) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// // Preparar la sentencia
$stmt = $mysqli->prepare($sql);

// // // Enlazar los parámetros

// Enlazar los parámetros
$stmt->bind_param("ssssssssssss", $cp, $s_e, $sexo, $ocupacion, $escolaridad, $explicacion, $estado, $municipio, $nombre, $institucion, $rol, $fecha, $hora);

// // Ejecutar la consulta
if ($stmt->execute()) {
    // Si la inserción fue exitosa, redirigir a una página de éxito o mostrar un mensaje
    header('Location: exito.php');
    exit();
} else {
    // Si hubo un error en la inserción, mostrar un mensaje de error o redirigir a una página de error
    header('Location: error.php');
    exit();
}

// // Cerrar la sentencia y la conexión
// $stmt->close();
// $conexion->close();
?>