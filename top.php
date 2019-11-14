<div class="site-navbar bg-white py-2">


      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">Escola AMF</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children" <?php if(isset($pg) and $pg<=0){ echo "class='active'";}?>>
                  <a href="index.php">Inicio</a>
                </li>
                
              <!--  <li <?php if(isset($pg) and $pg<=0){ echo "class='active'";}?>><a href="?pg=1">Shop</a></li>-->
                <li <?php if(isset($pg) and $pg==7){ echo "class='active'";}?>><a href="?pg=7">Sobre</a></li>

                <li <?php if(isset($pg) and $pg==8){ echo "class='active'";}?>><a href="?pg=8">Eventos</a></li>
                <!--   <li <?php if(isset($pg) and $pg==2){ echo "class='active'";}?>><a href="#">New Arrivals</a></li>-->
                <li <?php if(isset($pg) and $pg==3){ echo "class='active'";}?>><a href="?pg=2">Contactos</a></li>
                <li><a href="admin\public\index.php">Login</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>