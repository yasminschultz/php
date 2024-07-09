<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../yasmin-schultz/style.css">
<style>
    table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

</style>
    <title>Document</title>
</head>

<body>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>";
    echo "nProd: " . $_POST['produto'];
    echo "Cbarras: " . $_POST['barras'];
    echo "Marcas: " . $_POST['marcas'];
    echo "laboratorio: " . $_POST['laboratorio'];
    echo "precoV: " . $_POST['precov'];
    echo "PrecoC: " . $_POST['precoc'];
    echo "Quant: " . $_POST['quant'];
    echo "validade: " . $_POST['validade'];
    echo "fornecedo: " . $_POST['fornecedor'];
    echo "dtfabricacao: " . $_POST['dtfab'];
    echo "Receita: " . $_POST['dtfab'];
    echo "</th>";
    echo "</tr>";
    echo "<tr>";
    
    echo "</tr>";
    echo "</table>"

    ?>
</body>

</html>