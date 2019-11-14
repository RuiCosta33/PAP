<?php


if(isset($_GET['pg'])){
	$pg=(int)$_GET['pg']; //coloquei o (int) por razões de segurança. O que isso faz é dizer que o $_GET['pg'] tem de ser um número inteiro
}
else $pg=0;


//agora vamos verificar que página temos de carregar no index
switch($pg){
	case 1: require "shop.php"; break;
case 2: require "contact.php"; break;
case 3: require "cart.php"; break;
case 4: require "checkout.php"; break;
case 5: require "thankyou.php"; break;
case 6: require "single.php"; break;
case 7: require "about.php"; break;
case 8: require "eventos.php"; break;
	default: require "home.php"; break; //se $pg=0 chama o home.php que é a primeira página do nosso site
}

?>