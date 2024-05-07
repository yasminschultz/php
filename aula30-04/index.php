<?php

// Arrays de alunos
$aluno1 = [
    "nome" => "Ítalo Breno",
    "endereco" => "Rua 2",
    "cidade" => "Guanambi",
    "estado" => "Bahia",
    "idade" => 17,
    "cpf" => "111.222.333-4"
];

$aluno2 = [
    "nome" => "Nicolas",
    "endereco" => "Rua Sei Lá",
    "cidade" => "Tanque Novo",
    "estado" => "Bahia",
    "idade" => 18,
    "cpf" => "000.000.000-0"
];

$aluno3 = [
    "nome" => "Lucas",
    "endereco" => "Rua Lucas",
    "cidade" => "Montes Claros",
    "estado" => "Minas Gerais",
    "idade" => 22,
    "cpf" => "999.999.999-9"
];

// Arrays de professores
$professor1 = [
    "nome" => "Eber",
    "endereco" => "Rua Digníssima",
    "cidade" => "Eberlândia",
    "estado" => "Bahia",
    "idade" => 30,
    "materia" => "Banco de Dados"
];

$professor2 = [
    "nome" => "Fabio",
    "endereco" => "Rua",
    "cidade" => "Laboratório",
    "estado" => "Bahia",
    "idade" => 99,
    "materia" => "PSW"
];

$professor3 = [
    "nome" => "Silvia",
    "endereco" => "Caverna",
    "cidade" => "Pré-história",
    "estado" => "Pangeia",
    "idade" => "∞",
    "materia" => "Português"
];

// Lista de alunos
$alunos = [$aluno1, $aluno2, $aluno3];
echo "Informações dos Alunos:\n";
foreach ($alunos as $aluno) {
    echo "Nome: {$aluno['nome']}\n";
    echo "Endereço: {$aluno['endereco']}\n";
    echo "Cidade: {$aluno['cidade']}\n";
    echo "Estado: {$aluno['estado']}\n";
    echo "Idade: {$aluno['idade']}\n";
    echo "CPF: {$aluno['cpf']}\n";
    echo "-------------------------\n";
}

// Lista de professores
$professores = [$professor1, $professor2, $professor3];
echo "Informações dos Professores:\n";
foreach ($professores as $professor) {
    echo "Nome: {$professor['nome']}\n";
    echo "Endereço: {$professor['endereco']}\n";
    echo "Cidade: {$professor['cidade']}\n";
    echo "Estado: {$professor['estado']}\n";
    echo "Idade: {$professor['idade']}\n";
    echo "Matéria: {$professor['materia']}\n";
    echo "-------------------------\n";
}