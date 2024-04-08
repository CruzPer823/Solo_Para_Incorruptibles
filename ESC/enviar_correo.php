<?php
// Incluye la clase de PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader


// Conecta a la base de datos
$mysqli = new mysqli("localhost", "user","12345","SPI2");

// Verifica la conexión
if ($mysqli->connect_error) {
    die("Error en la conexión: " . $mysqli->connect_error);
}


$id = $_GET['id'];


$consulta = "SELECT 
                            d.*,
                            estados.nombre AS nombre_estado,
                            municipios.nombre AS nombre_municipio
                        FROM 
                            (SELECT * FROM denuncia WHERE id = $id) AS d
                        INNER JOIN 
                            municipios ON d.ubicacion = municipios.id
                        INNER JOIN 
                            estados ON municipios.estado = estados.id;";
$resultado = $mysqli->query($consulta);

if ($resultado->num_rows > 0) {
    // Obtiene los datos del registro
    $fila = $resultado->fetch_assoc();
    $denunciaId = $fila['id'];
    //$nombreEstado = $fila['nombre_estado'];
    $nombreMunicipio = $fila['nombre_municipio'];
    $nombreEstado = $fila['nombre_estado'];
    $cp = $fila['cp'];
    $seccionElectoral = $fila['seccionElectoral'];
    $sexo = $fila['sexo'];
    $ocupacion = $fila['ocupacion'];
    $escolaridad = $fila['escolaridad'];
    $descripcion = $fila['descripcion'];	
    //ubicacion 	
    $direccion = $fila['direccion'];
    $nombreSosp = $fila['nombreSosp'];
    $instSosp = $fila['instSosp'];
    $rolSosp = $fila['rolSosp'];	
    $fecha = $fila['fecha']; 	
    $hora = $fila['hora'];

    // Crea una nueva instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'mail.spincorruptibles.com';  // Dirección del servidor SMTP
        $mail->SMTPAuth   = true;                   // Habilita la autenticación SMTP
        $mail->Username   = 'denuncias@spincorruptibles.com';          // Nombre de usuario SMTP
        $mail->Password   = 'Spincorruptibles1@';        // Contraseña SMTP
        $mail->SMTPSecure = 'ssl';                  // Tipo de encriptación (tls o ssl)
        $mail->Port       = 465;                    // Puerto SMTP

        // Configuración del remitente y destinatario
        $mail->setFrom('denuncias@spincorruptibles.com', 'Solo Para Incorruptibles');
        $mail->addAddress('jcuatepotzo58@gmail.com', 'Destinatario');
        $mail->addAddress('dani.quique.bryan@gmail.com', 'Destinatario2');


        $sql1 = "SELECT conducta.nombreCond, conducta.tipo
        FROM conducta
        INNER JOIN denunciaconducta ON conducta.id = denunciaconducta.id_conducta
        WHERE denunciaconducta.id_denuncia = $id
        ORDER BY conducta.tipo";
        $resultado2 = mysqli_query($mysqli, $sql1);

        $conductas = ''; // Variable para almacenar las conductas

        if ($resultado2) {
            if (mysqli_num_rows($resultado2) > 0) {
                // Output data of each row
                while($row = $resultado2->fetch_assoc()) {
                    // Concatenar las conductas en la variable $conductas
                    $conductas .= '<p><strong>' . $row["nombreCond"] . '</strong> - Tipo: ' . $row["tipo"] . '</p>';
                }
            } 
        }


        // Contenido del correo electrónico
        $mail->isHTML(true);
        $mail->Subject = 'Reporte de Denuncia';
        $mail->CharSet = 'UTF-8'; // Establecer la codificación UTF-8
        $mail->Body    = "Se ha reportado la denuncia con ID: $denunciaId.<br><br>
        <strong><----DETALLES DE LA DENUNCIA----> <br></strong>
        Fecha: $fecha <br>
        Hora: $hora <br>
        Sección electoral: $seccionElectoral <br><br>
        <strong><----DATOS DE DENUNCIANTE----> <br></strong>
        Sexo: $sexo <br>
        Ocupacion: $ocupacion <br>
        Escolaridad: $escolaridad <br>
        Descripcion: $descripcion <br><br>
        <strong><----UBICACIÓN----></strong> <br>
        CP: $cp <br>
        Municipio: $nombreMunicipio <br>
        Estado: $nombreEstado <br>
        Dirección: $direccion <br><br>
        <strong><----DATOS DE PERSONA DENUNCIADA----> </strong><br>
        Nombre de la persona involucrada: $nombreSosp <br>
        Institución donde trabaja la persona involucrada: $instSosp <br>
        Rol de la persona involucrada: $rolSosp <br><br>
        <strong><----CONDUCTAS REPORTADAS----></strong>
        $conductas";
       

        // Envía el correo electrónico
        $mail->send();
        echo 'Correo electrónico enviado correctamente';
        $sql= "UPDATE denuncia
        SET Estado =1
        WHERE id = $denunciaId";
        $resultado2 = mysqli_query($mysqli, $sql);
        
    } catch (Exception $e) {
        echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
    }
} else {
    echo "No se encontraron datos para el ID de denuncia proporcionado";
}


$mysqli->close();
?>
