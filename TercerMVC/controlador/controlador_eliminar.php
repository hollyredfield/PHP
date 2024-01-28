<?php
require_once('../modelo/gestion_datos.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreEliminar = $_POST["nombre"];
    $apellidosEliminar = $_POST["apellidos"];
}

if (isset($_POST['accion'])) {
    $accionEliminar = $_POST['accion'];
} else {
    $accionEliminar = "";
}

switch ($accionEliminar) {
    case "eliminar":
        if (eliminarDatos($nombreEliminar, $apellidosEliminar)) {
            $mensaje = "Datos eliminados correctamente.";
        } else {
            $mensaje = "Error al intentar eliminar los datos.";
        }
        break;
    default:
        
        break;
}

include("../vistas/mensaje.php");
?>
