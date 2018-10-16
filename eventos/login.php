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
      <link rel="stylesheet" type="text/css" href="css/login.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   </head>
   
   <body class="text-center">
      
      <form method="post" action="dados-login-user.php" class="form-signin">
      <img class="mb-4" src="img/ufmt.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>

      <label for="inputRga" class="sr-only">Rga</label>
      <input type="text" id="inputRga" name="rga" class="form-control mb-3" placeholder="RGA" required>

      <label for="inputSenha" class="sr-only">Senha</label>
      <input type="password" id="inputSenha" name="senha" class="form-control mb-3" placeholder="Senha" required>

       <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
       <a href="?cancelar" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Cancelar</a>
       <a class="nav-link" href="cad_user.php">Cadastre-se</a>
 

      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
    





      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/jquery-2.2.4.min.js"></script>  
   </body>
 </html>