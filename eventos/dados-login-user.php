<?php
   session_start(); 
   include_once("conexao.php");

   // capturar os valores
   $rga = $_POST['rga'];
   $senha = $_POST['senha'];


   //$rga - stripcslashes($rga);
   //$senha - stripcslashes($senha);


   //$rga = mysql_real_escape_string($rga);
   //$senha = mysql_real_escape_string($senha);

  

   //pesquisar na tabela
   $result = mysqli_query($conn,"SELECT * FROM usuario WHERE rga = '$rga' AND senha = '$senha'");

   $linha = mysqli_fetch_array($result);



   if($linha['rga'] == $rga && $linha['senha'] == $senha){
   		//echo "Login com sucesso!<br>".$linha['rga'];
   
         $_SESSION['logado'] = true;
         $_SESSION['id_usuario'] = $linha['idUser'];
         $_SESSION['nome_usuario'] = $linha['nome'];
   		header("Location: adm.php");

   }else{

   	echo "Rga ou senha incorreto!";
   }



?>
