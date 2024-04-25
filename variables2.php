<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables 2</title>
</head>
<body>
    <?php
    

    //variables locales
    $contacto = "eduardo";

    function mostrarContacto(){
        $contacto = "miguel";
        echo $contacto;
    }

    echo 'contacto global',$contacto;
    echo '<hr/>';
    echo 'contacto funcion',mostrarContacto();


    echo '<hr/>';
    //variables globales
    global $mensaje;

    $mensaje = "saludo";

    function mostrarContactoGlobal(){
        global $mensaje;
        echo $mensaje;
    }
    echo "<hr/>";
    echo "contatoglobal",$mensaje;
    echo "<hr/>";
    echo "contacto funcionglobala",mostrarContactoGlobal();

    echo "<hr/>";

    //variables estaticas

    function contador(){
        static $num = 1;
        echo $num;
        $num = $num +1;
    }   

    echo "<hr/>";
    echo contador();
    echo "<hr/>";
    echo contador();
    echo "<hr/>";
    echo contador();


    //variables super gloobales

    $saludo;
    $saludo = "Bienvenidos";
     echo $GLOBALS['saludo'] ,"<br/>";

     echo "<br/>";

    

    ?>
</body>
</html>