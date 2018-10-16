<?php
   session_start(); 
   include_once("conexao.php");

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $imagem = $_POST['imagem'];
    $local = $_POST['local'];
    $valor = $_POST['valor'];
    $vagas = $_POST['vagas'];
    $id_usuario = $_SESSION['id_usuario'];

      
    $result = "INSERT INTO evento (titulo, descricao, imagem, data, horario, local, valor, vagas, id_usuario) VALUES ('$titulo', '$descricao', '$imagem', '$data', '$horario', '$local', '$valor', '$vagas', $id_usuario)";
    $result = mysqli_query($conn , $result);



?>