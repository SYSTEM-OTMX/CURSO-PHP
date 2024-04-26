<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPO DE DATOS</title>
</head>
<body>
    <?php

    /*
    -INTEGERS O ENTEROS
    -NOO CONTIENEN DECIMALES
    -PUEDEN SER POSITIVOS OOO NEGATIOS
    -PUEDE CONTENER NUMEROO OCTALES(BASE 8), HEXADECIMALES(BASE 16), Y BINARIOS (BASE 2)

    */

    echo "<br/>";
    echo "--------------enteros-------------";
    echo "<br/>";


    $puntaje = 120;
    echo $puntaje;


    echo "<br/>";
    echo "-------------HEXADECIMAL-------------";
    echo "<br/>";

    $numHeza = 0x6FFF6;
    echo $numHeza;


    echo "<br/>";
    echo "-------------STRING A ENTERO-------------";
    echo "<br/>";

    $puntaje = 20;
    $total = "120" + $puntaje;
    echo $total;


    echo "<br/>";
    echo "-------------NUMEROS NEGATIVOS-------------";
    echo "<br/>";

    $puntajeTotal = 8 - 20;
    echo $puntajeTotal;


    echo "<br/>";
    echo "-------------Obtener tamaño de un entero (Determinado por el sistema)-------------";
    echo "<br/>";

    echo PHP_INT_SIZE;
    
    echo "<br/>";
    echo "-------------Obtener el minimo numero entero, determinado por el sistema-------------";
    echo "<br/>";

    echo PHP_INT_MIN;


    echo "<br/>";
    echo "-------------Obtener el maximo numero entero, determinado por el sistema-------------";
    echo "<br/>";

    echo PHP_INT_MAX;


    echo "<br/>";
    echo "-------------Decimales-------------";
    echo "<br/>";

    $pagoTotal = 102.45;
    echo "<br/>";
    echo $pagoTotal;

    echo "<br/>";
    echo "-------------Decimales negativos-------------";
    echo "<br/>";

    $saldoPendiente = -56.23;
    echo "<br/>";
    echo $saldoPendiente;

    echo "<br/>";
    echo "-------------Redondedar Decimales-------------";
    echo "<br/>";

    $puntaje = 48.51;
    echo "<br/>";
    echo round($puntaje);


    echo "<br/>";
    echo "-------------Compara decimales con precision-------------";
    echo "<br/>";


    $precio = 1.87;
    $estimado = 1.98;
    echo "<br/>";
    echo (abs($precio - $estimado) < 0.1 ) ? "PAGA" : "NO PAGA";
    
    ?>
</body>
</html>