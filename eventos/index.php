<?php
   session_start();//iniciando sessao 


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
               <div class="form-busca">
                  <form class="form-busca-site">
                     <input class="form-control mr-sm-2" type="text" name="palavra" placeholder="Buscar">
                     <button class="btn-buscar-top" type="submit"></button>
                  </form>
               </div>
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
         <!-- Slide topo-->
         <div class="container-fluid slide-topo">
            <div class="row">
               <div class="col-md-12 slide-topo-conteudo">
                  <h3 class="p-5 text-center lead evt-recente">Adicionados Recentes<br>...</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <!-- elementos usados para o carousel: https://getbootstrap.com/docs/4.1/components/card/ -->    
            <div class="wrapper">
               <div class="title text-center lead"><br>Eventos com inscrições abertas</div>
               <div class="container-fluid">
                  <div class="module-section clearfix">
                     <span class="left-controls controle" role="button" aria-label="See Previous Modules">
                     <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                     </span> 
                     <span id="controlR1" class="right-controls controle" role="button" aria-label="See Previous Modules">
                     <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                     </span>  
                     <ul id="content">
                        <li class="card">
                           <div class="md-3 card">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_curso.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <!-- Próximos eventos -->
            <!-- elementos usados para o carousel: https://getbootstrap.com/docs/4.1/components/card/ -->      
            <div class="wrapper">
               <div class="title text-center lead"><br>Próximos Eventos</div>
               <div class="container-fluid">
                  <div class="module-section-prox">
                     <span class="left-controls-prox controle" role="button" aria-label="See Previous Modules">
                     <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                     </span> 
                     <span id="controlR3" class="right-controls-prox controle" role="button" aria-label="See Previous Modules">
                     <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                     </span>  
                     <ul id="content1">
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_evento.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <!-- Eventos passados -->
            <!-- elementos usados para o carousel: https://getbootstrap.com/docs/4.1/components/card/ -->    
            <div class="wrapper">
               <div class="title text-center lead"><br>Eventos Passados</div>
               <div class="container-fluid">
                  <div class="module-section-pass">
                     <span class="left-controls-pass controle" role="button" aria-label="See Previous Modules">
                     <b class="fa fa-chevron-left fa-chevron-left-extra" aria-hidden="true"></b>
                     </span> 
                     <span id="controlR2" class="right-controls-pass controle" role="button" aria-label="See Previous Modules">
                     <b class="fa fa-chevron-right fa-chevron-right-extra" aria-hidden="true"></b>
                     </span>  
                     <ul id="content2">
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                        <li class="card">
                           <div class="md-3">
                              <img class="card-img-top" src="img/card_bg_passado.jpg" alt="Card image cap">
                              <div class="card-body">
                                 <h5 class="card-title">Inovação Tecnologica</h5>
                                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="evento.php" class="btn btn-primary">Saiba mais</a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <p class="p-5 text-center"> &copy; 2018 UFMT. Todo os direitos reservados.</p>
            </div>
         </div>
      </div>
      

      
      
      
      
      
     
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="stylesheet" type="text/css" href="css/carousel.css">
      <script src="js/bootstrap.min.js"></script>                                 
      <script src="https://use.fontawesome.com/76758773b6.js"></script>   
      <script src="js/jquery-2.2.4.min.js"></script>               
      <script src="js/menu.js"></script>
      <script src="js/carousel.js"></script>
      <script src="js/botao.js"></script>         
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
</html>