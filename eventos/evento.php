<?php
   session_start();//iniciando sessao 
   include_once("conexao.php"); //Chamando o script de conexao

   if(isset($_GET['sair'])){ //isset: se existir
      session_destroy();
      header("Location: index.php");
   }


?>

<!--Estrutura utilizando:
   ! Bootstrap v4.1.2 (https://getbootstrap.com/)
   ! Copyright 2011-2018 The Bootstrap Authors * 
   ! Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
   -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <title>Gerenciador de Enventos</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

   <header>
      <!--  menu modificado utilizando bootstrap: https://getbootstrap.com/docs/4.1/components/navbar/  -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="index.php">
         <img src="img/ufmt.svg" width="30" height="30" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <h6>Gerenciador de Eventos</h6>
               </li>
              
            </ul>
            <ul class="navbar-nav mr-rigth">                  

                  <?php if(isset($_SESSION['logado'])){ ?>
                    <ul class="navbar-nav mr-rigth">
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bem vindo!</a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                     <a class="dropdown-item" href="adm.php">Minha Conta</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Alterar meus dados</a>                        
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="?sair">Sair</a>
                   </div>
               </li>
               
            </ul>

                  <?php } else{ ?>

                      <li class="nav-item">
                        <a class="nav-link" href="cad_user.php">Cadastre-se</a>
                      </li>
                      <li class="nav-item">
                        <button type="button" id="botao" class="btn btn-info">Login</button>                        
                      </li>
                  <?php } ?>

                  
            </ul>
         </div>
      </nav>
      <!-- FINAL MENU-->
      
   </header>


   <!-- Imagem do evento -->
   <div class="row col-12" >
      <img src="" class="rounded" width="304" height="236">
   </div>

   <div class="row col-12">
      <h1 class="text-center"> </h1>
      <p class="text-justify"> </p>    
   </div>

   <div id="rodape" class="row">
         <div class="col-12">
            <p class="p-5 text-center"> &copy; 2018 UFMT. Todos os direitos reservados.</p>
         </div>
   </div>
   
   
   
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/evento.css">
   <script src="js/botao.js"></script>
   <script src="js/bootstrap.min.js"></script> 
   <script src="js/jquery-2.2.4.min.js"></script>               
   <script src="js/menu.js"></script>      
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

</body>
 </html>