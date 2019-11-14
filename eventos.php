<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeIn();
    $("#div2").fadeIn("slow");
    $("#div3").fadeIn(3000);
  });
});
</script>
<div class="site-wrap">
    
    
    <div class="site-blocks-cover inner-page" data-aos="fade">

     

       <img src="images/music.jpg" alt="Image" class="img-fluid" width="100%" height="100">
         
      <div class="container">
        <div class="row">
           
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Eventos</strong></div>
          
        </div>
      </div>
    </div>
<button>Click to fade in boxes</button>

<div class="row"  id="div1" style="padding-right:5px;padding-left:5px;">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/images/tuna.jpg" target="_blank">
          <img src="/images/natal.jpg" style="width:100%">
          <div class="caption">
            <p>Evento de Natal</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4" id="div2">
      <div class="thumbnail" >
        <a href="/images/banda.jpg" target="_blank">
          <img src="/images/pascoa.jpg" style="width:100%">
          <div class="caption">
            <p>Evento de Pascoa</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4" id="div3">
      <div class="thumbnail" >
        <a href="/images/orquestra.jpg" target="_blank">
          <img src="/images/verao.jpg"style="width:100%">
          <div class="caption">
            <p>Evento de Verao</p>
          </div>
        </a>
      </div>
    </div>
  </div>

</div>

    