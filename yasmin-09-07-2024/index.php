<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>aula09-07</title>
</head>
<body>
    <?php
    function nome_funcao ($par_1 = 0, $par_2 = "vazio") {
    echo "codigo da função <br>";
    return "dado de retorno: " .$par_1." / ".$par_2;
    }
    function multi($number){
        return $number * 10;
    }
    function number ($valor){
           for ($i =   0; $i < $valor; $i++);
           echo $valor. "<br>";
    }
    $retorno = nome_funcao();
    echo $retorno. "<br> <br>";
    $retorno = nome_funcao (18, "dudu");
    echo $retorno. "<br> <br>";

    for($i = 1; $i < 25; $i++){
        $returny = nome_funcao($i, "guilherme");
        echo $returny. "<br>";
    }
    for($i = 1; $i < 25; $i++){
        echo multi ($i). "<br> <br>";
    }


    ?>
</body>
</html>