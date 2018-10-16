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

    $sql = "SELECT count(*) FROM evento"; 
    $result = mysqli_query($conn, $sql);
    //echo mysqli_num_rows($result); 
    //$idEvento = mysqli_num_rows($result) + 1;

    $result = "INSERT INTO evento (titulo, descricao, data, horario, imagem, local, valor, vagas) VALUES ('$titulo', '$descricao', '$data', '$horario', '$imagem', '$local', '$valor', '$vagas')";
    $result = mysqli_query($conn , $result);


    if ($result) {
        $idUser = $_SESSION['id_usuario'];
        $funcao = "organizador";
        $r = "INSERT INTO controle_evento (usuario_idUser, evento_idEvento, funcao) VALUES ('$idUser', '$idEvento', '$funcao')";
        $r = mysqli_query($conn , $r);
        if($r){
            header("Location: adm.php");
        }
        else{
            echo "ERRO: " .mysqli_error($conn);
        }
    } 
    else {
        echo "Erro: " .mysqli_error($conn);
    }

?>