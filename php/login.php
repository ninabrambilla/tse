<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $sql = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
  $result = $conecta->query($sql);

  if ($result->num_rows > 0) {
    header('Location: ../html/cliente.html');
    exit();
  } else {
    echo "Email ou senha incorretos.";
  }
}

$conecta->close();
