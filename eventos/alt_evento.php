<?php
   session_start();//iniciando sessao


   include_once("conexao.php");
   $id = $_GET['id'];
   $result = mysqli_query($conn,"SELECT * FROM evento WHERE id = $id");
   $linha = mysqli_fetch_assoc($result);

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

   <form method="post" action="dados-alt-evento.php" class="form-signin">

      <img class="mb-4" src="img/ufmt.svg" alt="logo" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Alterar</h1>

      <input type="text" id="inputTitulo" name="titulo" class="form-control cad-user mb-3" placeholder="Titulo do evento" required autofocus value="<?php echo $linha['titulo']; ?>">

      <textarea class="form-control cad-user mb-3" name="descricao" id="descricao" rows="4" placeholder="Descrição do evento" required><?php echo $linha['descricao']; ?></textarea>

      <input class="form-control cad-user mb-3" name="data" type="date" id="inputData" required value="<?php echo $linha['data']; ?>">

      <input type="time" name="horario" class="form-control cad-user mb-3" id="inputHora" required value="<?php echo $linha['hora']; ?>">

      <input type="text" id="inputLocal" name="local" class="form-control cad-user mb-3" placeholder="Local do evento" required value="<?php echo $linha['local']; ?>">

      <input type="number" name="valor" class="form-control cad-user mb-3" placeholder="Valor do evento" value="<?php echo $linha['valor']; ?>">

      <input type="number" name="vagas" class="form-control cad-user mb-3" placeholder="Total de vagas no evento" required value="<?php echo $linha['vagas']; ?>">
      <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">


      <button class="btn btn-lg btn-success btn-block" type="submit">Alterar</button>
      <a href="?cancelar" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Cancelar</a>

      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>

   </form>




   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/cad_user.css">
   <script src="js/bootstrap.min.js"></script> 
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>                  

</body>
 </html>