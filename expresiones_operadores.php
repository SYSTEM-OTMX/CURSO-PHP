<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $nombre = "luis orlando";
    $salario = 200000;

    // operador = es un operador de asignacion

    $apellido = "bueno";


    $suma = 3 + 2;


    //diferentes operadoes

    //aritmeticos

    $suledo = 100000;
    $subsidioTransporte = 200000;
    $salud = 10000;
    $pension = 10000;
    $ingresos = $suledo + $subsidioTransporte;
    $egresos = $salud + $pension;
    $total = $ingresos - $egresos;


    echo "<br/>";

    //area de un rectangulo
    $base = 10;
    $alturea = 14;
    $area = $base * $alturea;

    echo "area : $area";


    echo "<br/>";

    //OPERADORES CONDICIONALES
    $puedeIngresar = ( false ) ? "ENTRA" : "NO ENTRA";

    echo $puedeIngresar;

    echo "<br/>";

    //operadores logicos and or %%  || //
    $permiso = false;
    $autenticado = true;

    echo ($permiso or $autenticado) ? "Bienvenido administrador": "Bienvenido Invitado";

    //operadores mayor >
    echo "<br/>";

    $total = 55;
    $pasaMateria = 50;
    $validarPasa = ($total > $pasaMateria) ? true : false;
    echo ($validarPasa) ? "PASA" : "NO PASA";


    echo "<br/>";
    //incremento
    $contador = 1;
    $contador += $contador;
    echo $contador;

    echo "<br/>";
    //decremento
    $contador = 1;
    $contador -= $contador;
    echo $contador;

    echo "<br/>";

    //multiplicacion
    $contador = 2;
    $contador *= $contador;
    echo $contador;

    echo "<br/>";

    //division
    $contador = 30;
    $contador /= 2;
    echo $contador;

    echo "<br/>";
    //moodulo
    $contador = 51;
    $contador %= 2;
    echo $contador;


    //operador de asignacioon
    echo "<br/>";
    $nombreCompleto = "Jose ";
    $nombreCompleto .= "bueno ";
    $nombreCompleto .= "orlando ";
    echo $nombreCompleto;


    echo "<br/>";
    //operadores de incremento
    $conta = 20;
    $conta  += 1;
    echo $conta;

    echo "<br/>";

    //operadroo post incremento
    echo $conta ++;
    echo "<br/>";
    echo $conta;

    echo "<br/>";
    //operador pre incremento

    echo ++ $conta;
    echo "<br/>";
    echo $conta;






    ?>
</body>
</html>