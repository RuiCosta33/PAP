<?php
if(isset($_POST['enviar']) && $_POST['enviar']=="Enviar"){
  
  require "bd.php";
  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $title=$_POST['title'];
  $message=$_POST['message'];
  
  $inserir_conta=$conn->query("Insert into messages (first_name, last_name, email, title, message) VALUES ('".$fname."', '".$lname."' , '".$email."', '".$title."', '".$message."')") or die (mysqli_error($conn));


  if($inserir_conta){
   echo "<meta http-equiv=refresh content='0; url=index.php?pg=2&m=1'>";exit;  }
   
   else echo "<meta http-equiv=refresh content='0; url=index.php?pg=2&m=2'>";exit;
        }?>
        <style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
  <body>
  
  <div class="site-wrap">
    

  
    
    <div class="site-blocks-cover inner-page" style="background-image: url('images/contact.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center" data-aos="fade">
      <div class="container">
        <div class="row">
        
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>
    


    <div class="site-section">

      <div class="container">
<?php
      if(isset($_GET['m'])){
           $m=(int)$_GET['m'];
           switch($m){
            case 1:echo '<div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong>Sucesso!</strong> Enviou a mensagem com sucesso!
</div><br>'; break;
            case 2:echo '<div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Oops!</strong> Algo de errado nao esta certo.
</div><br>'; break;
            default: echo "";
           }
         }?>
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Não tenha medo de nos contactar!</h2>
          </div>
          <div class="col-md-7">

            <form action="?pg=2" method="post">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Subject </label>
                    <input type="text" class="form-control" id="c_subject" name="title">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">

                    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary btn-lg btn-block" >
                  </div>
                </div>
              </div>
            </form>
          </div>
          <?php 
              $sql_frase=$conn->query("Select * from contacts") or die ("Erro ao selecionar o home.");
                 if($sql_frase->num_rows>=1){
                    $ln_frase=$sql_frase->fetch_assoc(); ?>

          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Freamunde</span>
              <p class="mb-0"><?php echo $ln_frase['morada']?></p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">Telemovel</span>
              <p class="mb-0">+<?php echo $ln_frase['telm']?></p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">E-mail</span>
              <p class="mb-0"><?php echo $ln_frase['email']?></p>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>    


   
  </div>


  </body>
</html>