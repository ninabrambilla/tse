<?php
session_start();
include_once('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

$inserir = "INSERT INTO carros (nome, email, senha, cpf) VALUES( '$nome', '$email','$senha', '$cpf')";
$result = mysqli_query($conecta, $inserir);
