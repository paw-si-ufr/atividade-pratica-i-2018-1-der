<?php
   session_start();//iniciando sessao 


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
   <link rel="stylesheet" type="text/css" href="css/meus_eventos.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>


       <div class="container-fluid principal">

      <div class="topo-principal">      
         <h3 class="p-5 text-center lead ">Resultado da busca<br>...</h3>
      </div>

      <div id="dados-evento">
         Aqui inserir conteudo encontrado...
      </div>
      
   </div><!-- container-fluid principal -->

       


       












        <div class="row">
            <div class="col-md-12">
               <p class="p-5 text-center"> &copy; 2018 UFMT. Todo os direitos reservados.</p>
            </div>
         </div>










  




      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/jquery-2.2.4.min.js"></script>               
      <script src="js/menu.js"></script>      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>