<?php 


$valor = '';
$from = '';
$too = '';

//converitr a la medida estandar, metros

function FromToMetros($valor,$unidad_desde){
    switch($unidad_desde){
        case 'Milimetro':
            //formula para convertir valor a milimetro
            return $valor / 1000;
        break;

        case 'Centrimetro':
             //formula para convertir valor a centimetro
            return $valor / 100;
        break;

        case 'Decimetro':
            //formula para convertir valor a decimetro
            return $valor / 10;
        break;

        case 'Metro':
            //formula para convertir valor a Metro
           return $valor * 1;
        break;

        case 'Decametro':
            //formula para convertir valor a Decametro
           return $valor * 10;
        break;

        case 'Hectometro':
            //formula para convertir valor a Hectometro
           return $valor * 100;
        break;

        case 'Kilometro':
            //formula para convertir valor a HKiloometro
           return $valor * 1000;
        break;

        default: 
            return 'Unidad no Soportada';
        break;
        

        
    }
}


if(isset($_POST["convertir"])){
    //ontener valores
    $valor = $_POST["valor"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $calculoDesde = FromToMetros($valor,$from);

    $resultado = $calculoDesde;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="h1 text-center">conversor de longitud</h1>
            </div>
        </div>

       <form action="" method="post">
       <div class="row my-2">
            <div class="col-4">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" name="valor" id="valor" placeholder="Valor" class="form-control">
            </div>
            <div class="col-4">
                <label for="from" class="form-label">Desde:</label>
                <select name="from" id="from" class="form-select">
                    <option value="">--Selecciona un valor--</option>
                    <option value="Milimetro">Milimetro</option>
                    <option value="Centimetro">Centimetro</option>
                    <option value="Decimetro">Decimetro</option>
                    <option value="Metro">Metro</option>
                    <option value="Decametro">Decametro</option>
                    <option value="Hectometro">Hectometro</option>
                    <option value="Kilometro">Kilometro</option>
                </select>
            </div>
            <div class="col-4">
                <label for="to" class="form-label">Hasta:</label>
                <select name="to" id="to" class="form-select">
                <option value="">--Selecciona un valor--</option>
                    <option value="Milimetro">Milimetro</option>
                    <option value="Centimetro">Centimetro</option>
                    <option value="Decimetro">Decimetro</option>
                    <option value="Metro">Metro</option>
                    <option value="Decametro">Decametro</option>
                    <option value="Hectometro">Hectometro</option>
                    <option value="Kilometro">Kilometro</option>
                </select>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12 text-center">
                <button class="btn btn-primary" name="convertir" type="submit" >Convertir</button>
            </div>
           
        </div>
        <div class="row my-2">
            <div class="col-12">
                    <label for="result" class="form-label">Resultado:</label>
                    <input type="text" id="result" name = "result" value="<?php if(isset($resultado)) echo $resultado; ?>" placeholder="Resultado" class="form-control">
                </div>
        </div>
       </form>
    </div>
</body>
</html>