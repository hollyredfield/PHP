<?php
function guardardatos($nombre, $apellidos){
    $archivo = fopen("../modelo/datos.dat", "a");
    fwrite($archivo, "$nombre; $apellidos" . PHP_EOL);
    fclose($archivo);
}

function mostrar(){  
    $archivo = fopen("../modelo/datos.dat", "r");
    $resultados = array();  // Almacenar resultados en un array

    while (!feof($archivo)) {
        $linea = fgets($archivo);
        $resultados[] = $linea;
    }
    fclose($archivo);
    return $resultados;  // Devolver array con todas las líneas
}

function eliminarDatos($nombre, $apellidos)
{
    $archivo = fopen("../modelo/datos.dat", "r");
    $temp = fopen("../modelo/temp.dat", "w");

    $eliminado = false;

    while (!feof($archivo)) {
        $linea = fgets($archivo);
        $datosFila = explode(';', $linea);

        // Compara y omite la línea si coincide con los datos a eliminar
        if ($datosFila[0] != $nombre || $datosFila[1] != $apellidos) {
            fwrite($temp, $linea);
        } else {
            $eliminado = true;
        }
    }

    fclose($archivo);
    fclose($temp);

    // Reemplaza el archivo original con el archivo temporal
    rename("../modelo/temp.dat", "../modelo/datos.dat");

    return $eliminado;
}
?>
