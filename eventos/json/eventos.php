<?php
	include_once("../conexao.php");

	$result = mysqli_query($conn,"SELECT * FROM evento");
	$qtd = mysqli_num_rows($result);

	$dados = array();
	$dados['current'] = '';
	$dados['rowCount'] = '';
	$dados['total'] = '';

	while($linha = mysqli_fetch_assoc($result)) {
		$dados['rows'][] = array('id' => $linha['id'], 'titulo' => $linha['titulo']);
	}

	$json = json_encode($dados);

	print_r($json);