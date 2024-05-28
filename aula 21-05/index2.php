<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Ordenada</title>
    <link rel="stylesheet" href="../aula-07-05/styles.css">
</head>
<body>
    <h1>Arrays</h1>

    <?php

    $listaordenada = array('Fábio', 'Antônio', 'João');
    echo '<pre>';
    echo "<h2>1 - array como lista ordenada</h2>";
    print_r($listaordenada);
    echo '</pre>';

    $listaordenada[] = 'Pedro';
    $listaordenada[] = 'Hubert';

    echo '<pre>';
    echo '<h2> 1.1 - adicionar dados ao array </h2>';
    print_r($listaordenada);
    echo '</pre>';

    $var = [
        'nome' => 'Fabio',
        'Endereço' => 'Rua 7 de setembro',
        'Idade' => 25
    ];

    echo '<pre>';
    echo '<h2> 2 - array associativo </h2>';
    print_r($var);
    echo '</pre>';

    $var['telefone'] = '77 91122-3344';
    $var['cep'] = '46430000';

    echo '<pre>';
    echo '<h2> 2.1 - adicionar dados ao array associativo </h2>';
    print_r($var);
    echo '</pre>';

    $var['nome'] = 'Bill';

    echo '<pre>';
    echo '<h2> 2.2 - substituindo dados ao array associativo </h2>';
    print_r($var);
    echo '</pre>';



    ?>
</body>
</html>