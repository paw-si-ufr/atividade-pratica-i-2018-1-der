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




      <div class="container-fluid principal align-items-center">
        
        <div class="row align-items-center">
          <div class="col-12">
             <h5 class="p-5 text-center lead evt-recente">Minha conta <br>...</h5>
          </div>         
        </div>  
        
        <div class="row align-items-center">

            <!-- Primeiro Bloco -->         
            <div class="col">
              <div class="card text-white bg-dark mb-3 card-menu" style="max-width: 25rem;">        
                <div class="card-body">
                  <img src="img/icone_menu-01.svg" width="70" height="70" alt="">
                  <h5 class="card-title"><a href="index.php">Todos os eventos</h5>         
                </div>
              </div>
            </div>

            <!-- Segundo Bloco -->  
            <div class="col">
               <div class="card text-white bg-dark mb-3 card-menu" style="max-width: 25rem;">        
                <div class="card-body">
                  <img src="img/icone_menu-03.svg" width="70" height="70" alt="">
                  <h5 class="card-title"><a class="endereco" href="cad_evento.php">Criar evento</a></h5>         
                </div>
              </div>
            </div>

            <!-- Terceiro Bloco --> 
            <div class="col">
              <div class="card text-white bg-dark mb-3 card-menu" style="max-width: 25rem;">        
                <div class="card-body">
                  
                  <img src="img/icone_menu-04.svg" width="70" height="70" alt="">
                  <h5 class="card-title"><a href="meus-eventos.php">Meus Eventos</h5>         
                </div>
              </div>
            </div> 

            <!-- Quarto Bloco -->
            <div class="col">
              <div class="card text-white bg-dark mb-3 card-menu" style="max-width: 25rem;">        
                <div class="card-body">
                  <img src="img/icone_menu-02.svg" width="70" height="70" alt="">
                  <h5 class="card-title"><a href="eventos-inscritos.php">Eventos inscritos</h5>         
                </div>
              </div>
            </div>
        </div> 
 
     
      </div>






<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">  
      <script src="js/bootstrap.min.js"></script>                                 
      <script src="https://use.fontawesome.com/76758773b6.js"></script>   
      <script src="js/jquery-2.2.4.min.js"></script>               
      <script src="js/menu.js"></script>
   
        
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     


   </body>
 </html>
