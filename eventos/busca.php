<?php
   session_start();//iniciando sessao

   if(isset($_GET['sair'])){ //isset: se existir
      session_destroy();
      header("Location: index.php");
   }
  $pesquisa = $_GET['palavra'];

?>


<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Resultado da pesquisa</title>
      
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


      <div class="container-fluid principal">
       



      <div class="topo-principal"> 
       
          <div class="form-busca p-5">
                  <form class="form-busca-site" id="form-busca">
                     <input id="palavra" class="form-control mr-sm-2" type="text" name="palavra" placeholder="Buscar">
                     <button class="btn-buscar-top" type="submit"></button>
                  </form>
               </div>   
         <h3 class="p-5 text-center lead ">Resultado da busca<br>...</h3>
      </div>

      <div id="dados">
         <!--AQUI VAI APARECER O CONTEUDO ENCONTRADO -->
      </div>
      
   </div><!-- container-fluid principal -->

       


       












        <div class="row">
            <div class="col-md-12">
               <p class="p-5 text-center"> &copy; 2018</p>
            </div>
         </div>








      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/busca.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/jquery-2.2.4.min.js"></script>               
      <script src="js/menu.js"></script>  
      <script src="js/busca.js"></script>     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
</html>