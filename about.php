<style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</style>
  
  <div class="site-wrap">
    
    
    <div class="site-blocks-cover inner-page" data-aos="fade">

         <?php 
              $sql_frase=$conn->query("Select * from about") or die ("Erro ao selecionar o home.");
                 if($sql_frase->num_rows>=1){
                    $ln_frase=$sql_frase->fetch_assoc(); ?>

       <img src="images/photos/<?php echo $ln_frase['banner']?>" alt="Image" class="img-fluid" width="100%" height="10%">
         
      <div class="container">
        <div class="row">
           
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">About</strong></div>
        </div>
      </div>
    </div>

</div>
  <br>

    <div class="container">
      <h2  style="font-size:28px;"><b><?php echo $ln_frase['title']?></b></h2>
    </div>

   
<div class="site-section custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="images/escola.jpg" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="icon-play"></span></a>

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            
            
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">Como começamos ?</h2>
            </div>
         <h3 style="font-size:20px;" align="justify">
&emsp;&emsp;<?php echo $ln_frase['text']?></h3><br>

            
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="site-section-heading pt-3 mb-4" style="padding-left:100px;">
              <h2 class="text-black">Para além da escola, o que há mais ?</h2>
            </div>


<div class="row" style="padding-right:5px;padding-left:5px;">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/images/photos/<?php echo $ln_frase['img1']?>" target="_blank">
          <img src="/images/photos/<?php echo $ln_frase['img1']?>" style="width:100%">
          <div class="caption">
            <p><?php echo $ln_frase['descricao1']?></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/images/photos/<?php echo $ln_frase['img2']?>" target="_blank">
          <img src="/images/photos/<?php echo $ln_frase['img2']?>" style="width:100%">
          <div class="caption">
            <p><?php echo $ln_frase['descricao2']?></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/images/photos/<?php echo $ln_frase['img3']?>" target="_blank">
          <img src="/images/photos/<?php echo $ln_frase['img3']?>" style="width:100%">
          <div class="caption">
            <p><?php echo $ln_frase['descricao3']?></p>
          </div>
        </a>
      </div>
    </div>
  </div>
   <?php }   ?> 
  