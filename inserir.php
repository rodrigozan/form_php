<?php

//Criado por Rodrigo Zan

$conexao = mysqli_connect("localhost","usuario_bancodedados","senhadousuario","nomedobancodedados");

gravar_tarefa($conexao);

function gravar_tarefa($conexao){
$nome = trim($_POST["nome"]);
$email = trim($_POST["email"]);
$pass = trim($_POST["pass"]);

if(mysqli_connect_error($conexao)){

echo 'Sem conexão com banco de dados';

die();
}

$sqlGravar = <<<INSERT
INSERT INTO usuarios (nome, email, pass) VALUES ( '$nome', '$email', '$pass' )
INSERT;
$result = mysqli_query($conexao, $sqlGravar);
}

echo"Dados cadastrado com sucesso!";
