<?php
   session_start();//iniciando sessao

   if(isset($_GET['cancelar'])){ //isset: se existir
      session_destroy();
      header("Location: index.php");
   }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
   <title>Gerenciador de Enventos</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/cad_evento.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="text-center">

   <form method="post" action="dados-cad-evento.php" class="form-signin">

      <img class="mb-4" src="img/ufmt.svg" alt="logo" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Cadastro</h1>

      <input type="text" id="inputTitulo" name="titulo" class="form-control cad-user mb-3" placeholder="Titulo do evento" required autofocus>

      <textarea class="form-control cad-user mb-3" name="descricao" id="descricao" rows="4" placeholder="Descrição do evento" required></textarea>

      <input class="form-control cad-user mb-3" name="data" type="date" id="inputData" required>

      <input type="time" name="horario" class="form-control cad-user mb-3" id="inputHora" required>

      <input type="file" class="form-control-file cad-user mb-3" name="imagem" id="inputImagem">

      <input type="text" id="inputLocal" name="local" class="form-control cad-user mb-3" placeholder="Local do evento" required>

      <input type="number" name="valor" class="form-control cad-user mb-3" placeholder="Valor do evento">

      <input type="number" name="vagas" class="form-control cad-user mb-3" placeholder="Total de vagas no evento" required>


      <button class="btn btn-lg btn-success btn-block" type="submit">Cadastrar</button>
      <a href="?cancelar" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Cancelar</a>

      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>

   </form>




   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/cad_user.css">
   <script src="js/bootstrap.min.js"></script> 
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>                  

</body>
 </html>