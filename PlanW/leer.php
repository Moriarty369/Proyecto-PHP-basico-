<?php

require 'vendor/autoload.php';
require 'conexion.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

$nombreArchivo = 'Personas.xlsx';

$documento = IOFactory::load($nombreArchivo);
$totalHojas = $documento->getSheetCount();

$numeroLetra = Coordinate::columnIndexFromString($letra);

/* for($indiceHoja = 0; $indiceHoja < $totalHojas; $indiceHoja++){ */
    $hojaActual = $documento->getSheet(0);
    $numeroFilas = $hojaActual->getHighestDataRow();
    $letra = $hojaActual->getHighestDataColumn();

    for($indiceFila = 1; $indiceFila<=$indiceFilas; $indiceFila++){
    /* for($indiceColumna = 1; $indiceColumna<=$numeroLetra; $indiceColumna++); */

        $valorA = $hojaActual->getCellByColumnAndRow(1, $indiceFila);
        $valorB = $hojaActual->getCellByColumnAndRow(2, $indiceFila);
        $valorC = $hojaActual->getCellByColumnAndRow(3, $indiceFila);
        $valorD = $hojaActual->getCellByColumnAndRow(4, $indiceFila);
        $valorE = $hojaActual->getCellByColumnAndRow(5, $indiceFila);
        $valorF = $hojaActual->getCellByColumnAndRow(6, $indiceFila);
        $valorG = $hojaActual->getCellByColumnAndRow(7, $indiceFila);

        $sql = "INSERT INTO personas(DNI, nombre, apellido1, apellido2, email, telefono, cod_persona)
        VALUES('$valorA','$valorB','$valorC','$valorD','$valorE','$valorF','$valorG')";
        $mysqli->query($sql);

        /* $valor = $hojaActual->getCellByColumnAndRow($indiceColumna, $indiceFila); */
      /*   $valor = $hojaActual->getCellByColumnAndRow($numerLetra, $indiceFila);
        $valor = $hojaActual->getCellByColumnAndRow(3, $indiceFila); */


        /* echo $valor.''/* .$valorB.''.$valorC.'<br/>' */;
    }
/* echo '<br/>';  */






echo '<script language="javascript">alert("Datos introducidos");window.location.href="index.php"</script>'; 




/* } */


?>