<?php

define('CAMINHOS', '../assets/cadastros.txt');

$nome = (string) $_POST['nome'];
$cpf = (string) $_POST['cpf'];

$arquivo = file_exists(CAMINHOS)
    ? fopen(CAMINHOS)
    : fopen(CAMINHOS);

fwrite($arquivo, 'Nome: ' . $nome . "\n");
fwrite($arquivo, 'CPF: ' . $cpf . "\n");

fclose($arquivo);

header('location: .. login/welcome.php');