<?php
   session_start();//iniciando sessao

   if(!isset($_SESSION['logado'])){
     header("Location: login.php");
     session_destroy();
   }
   if(isset($_GET['sair'])){ //isset: se existir
      session_destroy();
      header("Location: index.php");
   }
?>



<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <title>Gerenciador de Enventos</title>
      <meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="css/adm.css">
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
                      <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuário: <?php echo $_SESSION['nome_usuario'] ?></a>
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

   <div class="col-12 text-center jumbotron">
         <h5 class="jumbotron-heading lead">Minha conta</h5>
      </div>

      <div class="album py-5">
        <div class="container principal">
          <div class="row"> 

            <div class="col centralizar">
              <div class="card mb-4 card-menu"> 
              <button type="button" id="btn-adm-todos" class="card card-body"><p class="text-center lead "><img class="mb-4" src="img/telas-10.svg" width="90" height="90" alt=""></p>
                  <p class="text-center lead ">Todos os Eventos</p></button>

                </div>
              </div>

            <div class="col centralizar">
              <div class="card mb-4 card-menu"> 
              <button type="button" id="btn-adm-criar" class="card card-body"><p class="text-center lead "><img class="mb-4" src="img/telas-11.svg" width="90" height="90" alt=""></p>
                  <p class="text-center lead ">Criar evento</p></button>

                </div>
              </div>
            </div>

          
            <div class="row"> 
             <div class="col centralizar">
              <div class="card mb-4 card-menu"> 
              <button type="button" id="btn-adm-meus" class="card card-body"><p class="text-center lead "><img class="mb-4" src="img/telas-12.svg" width="90" height="90" alt=""></p>
                  <p class="text-center lead ">Meus Eventos</p></button>

                </div>
              </div>
             <div class="col centralizar">
              <div class="card mb-4 card-menu"> 
              <button type="button" id="btn-adm-inscritos" class="card card-body"><p class="text-center lead "><img class="mb-4" src="img/telas-13.svg" width="90" height="90" alt=""></p>
                  <p class="text-center lead ">Eventos inscritos</p></button>

                </div>
              </div>
          </div>
        </div>
        </div>
      </div>


<div class="row">
            <div class="col-md-12">
               <p class="p-5 text-center"> &copy; 2018</p>
            </div>
         </div>










     





<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">

      <script src="js/bootstrap.min.js"></script>                                 
      <script src="https://use.fontawesome.com/76758773b6.js"></script>   
      <script src="js/jquery-2.2.4.min.js"></script>               
      <script src="js/menu.js"></script>
      <script src="js/adm.js"></script> 
        
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     


   </body>
 </html>
