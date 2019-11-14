 <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
              <?php 
              $sql_frase=$conn->query("Select * from home") or die ("Erro ao selecionar o home.");
                 if($sql_frase->num_rows>=1){
                    $ln_frase=$sql_frase->fetch_assoc(); ?>

              <h1><?php echo $ln_frase['title']?></h1>
            <h2 class="sub-title">
<?php echo $ln_frase['text']?>
              </h2>
                     
          
        
            
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/photos/<?php echo $ln_frase['banner']?>" alt="Image" class="img-fluid">
          </div>
        </div>
        <?php }   ?> 
      </div>
    </div>

    