<?php
   session_start(); 
   include_once("conexao.php");

   $nome = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
   $rga = filter_input(INPUT_POST, 'rga', FILTER_SANITIZE_STRING);
   $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

   //echo "Usuario: $usuario <br>";
   //echo "RGA: $rga <br>";
   //echo "Senha: $senha <br>";

  $resultado_cad_usuario = "INSERT INTO   usuario (nome,  rga, senha) VALUES ('$nome', '$rga', '$senha')";
  $resultado_cad_usuario  = mysqli_query($conn , $resultado_cad_usuario);

  $_SESSION['logado'] = true;
  header("Location: adm.php");

?>