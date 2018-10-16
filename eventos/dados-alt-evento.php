<?php
   session_start(); 
   include_once("conexao.php");
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $local = $_POST['local'];
    $valor = $_POST['valor'];
    $vagas = $_POST['vagas'];

    $result = "UPDATE evento SET titulo = '$titulo', descricao = '$descricao', data = '$data', hora = '$horario', local = '$local', valor = '$valor', vagas = '$vagas' WHERE id = '$id'";
    $result = mysqli_query($conn , $result);


    if ($result) {
        header("location:dados-meus-eventos.php?alterado=sim");
    } 
    else {
        echo "Erro: " .mysqli_error($conn);
    }

?>