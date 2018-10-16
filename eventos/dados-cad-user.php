<?php
   session_start(); 
   include_once("conexao.php");

   $nome = $_POST['user'] 
   $rga = $_POST['rga'] 
   $senha = $_POST['senha'] 

   //echo "Usuario: $usuario <br>";
   //echo "RGA: $rga <br>";
   //echo "Senha: $senha <br>";

  $resultado_cad_usuario = "INSERT INTO   usuario (nome,  rga, senha) VALUES ('$nome', '$rga', '$senha')";
  $resultado_cad_usuario  = mysqli_query($conn , $resultado_cad_usuario);

  $_SESSION['logado'] = true;
  header("Location: login.php");

 
?>