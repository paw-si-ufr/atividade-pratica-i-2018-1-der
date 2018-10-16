<?php
	include_once("conexao.php");

	 $palavra = $_POST['palavra'];

	 $result = mysqli_query($conn,"SELECT * FROM evento WHERE titulo LIKE '%$palavra%'");
	 $qtd = mysqli_num_rows($result);	

?>

<?php
         if($qtd > 0){
          ?>
               <div class="todos-card">   
             <?php
                  while($linha = mysqli_fetch_assoc($result)) {
               ?> 

               
                     <div class="card-individual col-lg-9">
                            <div class="card" style="width: 18rem;">
                             <img class="card-img-top" src="img/capas/<?php echo $linha['imagem'];?>" alt="Card image cap">
                               <div class="card-body">
                               <h5 class="card-title"> <?php echo $linha['titulo'];?> </h5>

                               <p class="card-text"> <?php echo $linha['descricao'];?> </p>

                               <a href="#" class="btn btn-primary">Saiba mais</a>
                             </div>
                           </div>
                     </div>
                 
               <?php } ?>  </div> <?php } else { echo "Nada encontrado!"; } ?>
