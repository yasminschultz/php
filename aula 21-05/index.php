<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Tabela</h1>

    <?php
    
    $alunos = array("maria" => array("endereço" => "rua 12345", "idade" => 17, "bairro" => "bnh" ),
    "joao" => array("endereço" => "rua 4321", "idade" => 21, "bairro" => "vomitamel" ),
    "zeca" => array("endereço" => "rua 99999", "idade" => 19, "bairro" => "paraiso" ));

    ?>

    <div class="tabela">

                <table id="customers">
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Idade</th>
                        <th class="cidade">Cidade</th>
                    </tr>

                    <tbody id="CorpoTabela">
                        <tr>
                            <td> <?php echo"Maria"; ?></td>
                            <td> <?php echo $alunos["maria"] ["endereço"]; ?></td>
                            <td> <?php echo $alunos["maria"] ["idade"]; ?></td>
                            <td> <?php echo $alunos["maria"] ["bairro"]; ?></td>
                        </tr>
                        <tr>
                            <td> <?php echo"João"; ?></td>
                            <td> <?php echo $alunos["joao"] ["endereço"]; ?></td>
                            <td> <?php echo $alunos["joao"] ["idade"]; ?></td>
                            <td> <?php echo $alunos["joao"] ["bairro"]; ?></td>
                        </tr>
                        <tr>
                            <td> <?php echo"Zeca"; ?></td>
                            <td> <?php echo $alunos["zeca"] ["endereço"]; ?></td>
                            <td> <?php echo $alunos["zeca"] ["idade"]; ?></td>
                            <td> <?php echo $alunos["zeca"] ["bairro"]; ?></td>
                        </tr>

                    </tbody>

                </table>

            </div>
</body>
</html>