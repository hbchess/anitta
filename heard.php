<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" class="wide wow-animation" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $titlepage; ?></title>
    <meta name="format-detection" content="telephone=no">
	<meta content="<?php echo isset($descricao)?$descricao:""; ?>" name="description">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <!--meta charset="utf-8"-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic%7CRoboto:400,300,100,700,300italic,400italic,700italic%7CMontserrat:400,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Marck+Script" />
    <script src='js/jquery-1.8.3.min.js'></script>
	<script src='js/jquery.elevatezoom.js'></script>
	
	  <?php 
	   
	   $isiPad = (bool) strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'ipad');
$isiPhone = (bool) strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'iphone');
$isAndroid = (bool) strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'android');
 
//Forma de aplicação
if($isiPad ){
      echo ' <link rel="stylesheet" href="css/ipad.css" />';
}else{echo '<link rel="stylesheet" type="text/css" href="css/mobile.css"> <link rel="stylesheet" href="css/style2.css" />';}?>
<link rel="stylesheet" href="https://d3bjs74mzygat1.cloudfront.net/public/assets/css/custom.css?v=6">


   
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
 
  <!--div id="preloader">
    <div id="status">&nbsp;</div>
</div-->
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1561708304041839";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	</script>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-header">
	    <div class="col-lg-12 col-md-12 col-sm-12 b_top barra_rosa">
      	 <div class="col-lg-4 col-md-4 col-sm-4">
         <a href="prazo_entrega.html" target="_self">Frete grátis (PAC) para compras acima de R$ 150,00</a>          
      </div>
		   <div class="col-lg-4 col-md-4 col-sm-4">
       <a href="troca_devolucao.html" target="_self">Garantia de 06 meses</a>
        </div>
		   <div class="col-lg-4 col-md-4 col-sm-4">
      Atendimento de seg a sex das 09:00 às 17:00
		   </div>
       </div>
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap" id="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" class="rd-navbar" data-stick-up-offset="50" data-md-layout="rd-navbar-fullwidth">
            <div class="rd-navbar-toppanel">
              <div class="rd-navbar-toppanel-inner">
                <div class="rd-navbar-toppanel-submenu"><a href="#" data-rd-navbar-toggle=".rd-navbar-toppanel-submenu" class="rd-navbar-toppanel-submenu-toggle"></a>
                <ul>
                    <li><a href="login.html">Entrar</a></li>
                    <li><a href="cadastro.html">Cadastre-se</a></li>
                    <li><a href="minha_conta.html">Minha Conta</a></li>
                  </ul>
                </div>
                <div class="rd-navbar-toppanel-wrapper">
                  <div class="rd-navbar-contact-info">
                    <p class="font_preta" >Sejam bem vindos! </p>
                  </div>
                </div>
				<div class="rd-navbar-toppanel-wrapper" style="position:relative;">
				  <div id="telefoneTopo"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;(11) 4200-0224</div>
				</div>
              </div>
            </div>
			
			
<div class="rd-navbar-inner border_2px">
<div class="rd-navbar-panel">
<button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
<div class=" col-md-12 col-lg-12 col-xs-12 col-sm-12"> 

  
  
<div class="col-md-4 col-lg-4 col-xs-5 col-sm-5">           
<div class="rd-navbar-brand"><a href="./" class="brand-name"><img alt="" src="images/logo.png" ></a></div>
</div>
<div class="col-md-6 col-lg-6 col-xs-4 col-sm-4"> 
               <div class="rd-navbar-toppanel-search">
                    <div class="rd-navbar-search-wrap">
                      <div class="rd-navbar-search active">
                        <form action="search.html" method="GET" class="rd-navbar-search-form">
						  <div class="containerSearchMobile">
                            <label class="rd-navbar-search-form-input" style="display: block;">
                              <input type="text" name="s" placeholder="O que você deseja?" class="form-search" autocomplete="off">
                            </label>
                            <button type="submit" class="rd-navbar-search-form-submit"></button>
                            <div data-rd-navbar-toggle=".rd-navbar-search" class="rd-navbar-search-toggle" style="display: none !important;"></div>
						  </div>	
                        </form><span class="rd-navbar-live-search-results"></span>
                      </div>
                    </div>
                  </div>
</div>

<div class="col-md-2 col-lg-2 col-xs-3 col-sm-3 text-right"> 

<div class="rd-navbar-elements-wrap text-right">
<div class="rd-navbar-shop text-right">
<div class="rd-navbar-shop-toggle  text-right" style="height:48px;padding:3px 0px;">
<a href="#" data-rd-navbar-toggle=".rd-navbar-shop" class="text-middle icon icon-primary fl-line-icon-set-shopping63 font_rosa3" style="font-size:30px !important;">
<span style="
    font-style: normal !important;
    margin-left: -18px;
    font-size: 18px;
    font-family: sans-serif;
    position: absolute !important;
    z-index: 25;
    top: 18px;

">1</span>
</a>
<span class="vlr_c"> | 000,00</span>
</div>

<div class="rd-navbar-shop-panel">
<center><h4>Meu Carrinho</h4></center>
<div style="height:auto; overflow: auto; max-height:350px">
<div class="unit unit-spacing-15 unit-horizontal rd-navbar-shop-product">
<div class="unit-left"><a href="single-product.html" class="text-dark"><img alt="" src="images/category-05.jpg" style="width: 88px;"></a></div>
<div class="unit-body p text-left"><a href="single-product.html" class="text-dark">Agrafe earrings</a>
<p style="clear: both;"></p>
<p style="text-align:left; margin-top: 20px;"><span class="big text-regular">R$ 258.89</span></p>
<a href="#"><span class="rd-navbar-shop-product-delete icon mdi mdi-close"></span></a>
</div>
</div>

<hr class="divider divider-gray" style="margin-bottom: 0px; padding-bottom: 0px;"> 
<h5 class="bg_qtd">Quantidade: 5</h5>
<hr class="divider divider-gray" style="margin-bottom: 0px; padding-bottom: 0px;"> 
<center>
	<!--Alterado exibição do frete-->
    <div class="text-light text-normal text-spacing-40 texto_total">Total: </div>
	<div class="text-light text-normal text-spacing-40 texto_total">
		<span class="text-primary">R$ 1.035,56</span>
	</div>
	<!--Fim da Alterado exibição do frete-->
</center>
</div>
<a href="cart.html" class="btn btn-block btn-default">Ver Carrinho</a><a href="finalizar_pedido.html" class="btn btn-block btn-success">Finalizar</a>
	</div>
	
	
</div>
</div>


</div>

</div>
</div>
</div>

    <div class="section-top-20"></div>
    <!-- MOBILE MENU -->
    <div class="rd-navbar-inner <?php echo (!$isiPad) ? 'visible-xs visible-sm' : ""; ?>" style="height:30px; border:0px; transition: .6s;">
      <div class="rd-navbar-nav-wrap text-left">
        <ul class="rd-navbar-nav" style="text-align:left;">

          <br><br>
		  <li>       
             <div class="containerBemVindoMenu">
			   <label>Seja Bem Vindo à Anitta Store!</label>
			   <a href="login.html">Já é cadastrado?</a>
			 </div>		  
			 
             <div class="containerSearchMenu">
               <form action="search.html" method="GET" class="rd-navbar-search-form-menu">
                  <label class="rd-navbar-search-form-menu-input">					
                    <button type="submit" class="rd-navbar-search-form-menu-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <input type="text" name="s" placeholder="O que você deseja?" class="form-menu-search" autocomplete="off">
                  </label>
               </form>
             </div>		  
		  </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true"> 
              Lançamentos 2 <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a> 
            <ul class="dropdown-menu" id="menu3" aria-labelledby="drop6"> 
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
              Anéis <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a> 
            <ul class="dropdown-menu" id="menu3" aria-labelledby="drop6"> 
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
              Brincos <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a> 
            <ul class="dropdown-menu" id="menu3" aria-labelledby="drop6"> 
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
              Colares <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a> 
            <ul class="dropdown-menu" id="menu3" aria-labelledby="drop6"> 
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
              Pulseiras <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a> 
            <ul class="dropdown-menu" id="menu3" aria-labelledby="drop6"> 
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
              Outlet <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a> 
            <ul class="dropdown-menu" id="menu3" aria-labelledby="drop6"> 
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
              <b>Minha Conta</b> <i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a> 
            <ul class="dropdown-menu" id="menu3" aria-labelledby="drop6"> 
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" id="drop6" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
              <b>Meus Pedidos</b><i class="fa fa-plus-square-o" aria-hidden="true"></i>
            </a> 
            <ul class="dropdown-menu" id="menu3" aria-labelledby="drop6"> 
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
              <li>
                <a href="#">
                  Subcategoria
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="http://blog.anittastore.com/" target="_self">Blog</a>
          </li>
        </ul>
      </div>
    </div>
    <?php if(!$isiPad ){ ?>
    <div class="nav-dropdown visible-md visible-lg">
          <ul>
            <li><a href="category/lancamentos">Lançamentos <span class="caret"></span></a>
              <ul style="height: 430px; padding: 20px">
                <li style="background: none;">
                    <div class="col-md-4" style="text-align: left;">
                      <a href="#1">Categoria</a>
                      <a href="#2">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                    </div>
                    <div class="col-md-4">
                      
                      <div class="product reveal-inline-block">
                        <div class="product-media"><a href="single-product.html"><img alt="" src="images/index-12.jpg" width="290" height="389" class="img-responsive"></a>
                        </div>
                        <div class="offset-top-10">
                          <p class="big"><a href="single-product.html" class="text-base">6-mm Round Birthstone Stud Earrings</a></p>
                        </div>
							<div class="product-price text-bold"><span class="font-default text-light text-muted text-strike small">R$ 121,00</span> R$ 89,00 <br><span></div>
                         <div class="text-bold">ou <span class='font_rosa2'>6x</span> de <span class='font_rosa2'>R$ 000,00</span><br />sem juros</div>
						 <div class="btn-success btn-compra-item"><a href="single-product.html" class="text-base"><i class="fa fl-line-icon-set-shopping63" aria-hidden="true"></i> COMPRAR</a></div>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <img src="./images/menu/imagem-menu.jpg" class="img-responsive" style="position: relative; left: 55px">
                    </div>
                </li>
              </ul>
            </li>
            <li><a href="category/aneis">Anéis <span class="caret"></span></a>
              <ul style="height: 430px; padding: 20px">
                <li style="background: none;">
                    <div class="col-md-4" style="text-align: left;">
                      <a href="#1">Categoria</a>
                      <a href="#2">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                    </div>
                    <div class="col-md-4">
                      
                      <div class="product reveal-inline-block">
                        <div class="product-media"><a href="single-product.html"><img alt="" src="images/index-12.jpg" width="290" height="389" class="img-responsive"></a>
                        </div>
                        <div class="offset-top-10">
                          <p class="big"><a href="single-product.html" class="text-base">6-mm Round Birthstone Stud Earrings</a></p>
                        </div>
						<div class="product-price text-bold"><span class="font-default text-light text-muted text-strike small">R$ 121,00</span> R$ 89,00 <br><span></div>
                         <div class="text-bold">ou <span class='font_rosa2'>6x</span> de <span class='font_rosa2'>R$ 000,00</span><br />sem juros</div>
						 <div class="btn-success btn-compra-item"><a href="single-product.html" class="text-base"><i class="fa fl-line-icon-set-shopping63" aria-hidden="true"></i> COMPRAR</a></div>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <img src="./images/menu/imagem-menu.jpg" class="img-responsive" style="position: relative; left: 55px">
                    </div>
                </li>
              </ul>
            </li>
            <li><a href="category/brincos">Brincos <span class="caret"></span></a>
              <ul style="height: 430px; padding: 20px">
                <li style="background: none;">
                    <div class="col-md-4" style="text-align: left;">
                      <a href="#1">Categoria</a>
                      <a href="#2">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                    </div>
                    <div class="col-md-4">
                      
                      <div class="product reveal-inline-block">
                        <div class="product-media"><a href="single-product.html"><img alt="" src="images/index-12.jpg" width="290" height="389" class="img-responsive"></a>
                        </div>
                        <div class="offset-top-10">
                          <p class="big"><a href="single-product.html" class="text-base">6-mm Round Birthstone Stud Earrings</a></p>
                        </div>
						<div class="product-price text-bold"><span class="font-default text-light text-muted text-strike small">R$ 121,00</span> R$ 89,00 <br><span></div>
                         <div class="text-bold">ou <span class='font_rosa2'>6x</span> de <span class='font_rosa2'>R$ 000,00</span><br />sem juros</div>
						 <div class="btn-success btn-compra-item"><a href="single-product.html" class="text-base"><i class="fa fl-line-icon-set-shopping63" aria-hidden="true"></i> COMPRAR</a></div>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <img src="./images/menu/imagem-menu.jpg" class="img-responsive" style="position: relative; left: 55px">
                    </div>
                </li>
              </ul>
            </li>
            <li><a href="category/colares">Colares <span class="caret"></span></a>
              <ul style="height: 430px; padding: 20px">
                <li style="background: none;">
                    <div class="col-md-4" style="text-align: left;">
                      <a href="#1">Categoria</a>
                      <a href="#2">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                    </div>
                    <div class="col-md-4">
                      
                      <div class="product reveal-inline-block">
                        <div class="product-media"><a href="single-product.html"><img alt="" src="images/index-12.jpg" width="290" height="389" class="img-responsive"></a>
                        </div>
                        <div class="offset-top-10">
                          <p class="big"><a href="single-product.html" class="text-base">6-mm Round Birthstone Stud Earrings</a></p>
                        </div>
                          <div class="product-price text-bold"><span class="font-default text-light text-muted text-strike small">R$ 121,00</span> R$ 89,00 <br><span></div>
                         <div class="text-bold">ou <span class='font_rosa2'>6x</span> de <span class='font_rosa2'>R$ 000,00</span><br />sem juros</div>
						 <div class="btn-success btn-compra-item"><a href="single-product.html" class="text-base"><i class="fa fl-line-icon-set-shopping63" aria-hidden="true"></i> COMPRAR</a></div>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <img src="./images/menu/imagem-menu.jpg" class="img-responsive" style="position: relative; left: 55px">
                    </div>
                </li>
              </ul>
            </li>
           <li><a href="category/pulseiras">Pulseiras <span class="caret"></span></a>
              <ul style="height: 430px; padding: 20px">
                <li style="background: none;">
                    <div class="col-md-4" style="text-align: left;">
                      <a href="#1">Categoria</a>
                      <a href="#2">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                    </div>
                    <div class="col-md-4">
                      
                      <div class="product reveal-inline-block">
                        <div class="product-media"><a href="single-product.html"><img alt="" src="images/index-12.jpg" width="290" height="389" class="img-responsive"></a>
                        </div>
                        <div class="offset-top-10">
                          <p class="big"><a href="single-product.html" class="text-base">6-mm Round Birthstone Stud Earrings</a></p>
                        </div>
                  <div class="product-price text-bold"><span class="font-default text-light text-muted text-strike small">R$ 121,00</span> R$ 89,00 <br><span></div>
                         <div class="text-bold">ou <span class='font_rosa2'>6x</span> de <span class='font_rosa2'>R$ 000,00</span><br />sem juros</div>
						 <div class="btn-success btn-compra-item"><a href="single-product.html" class="text-base"><i class="fa fl-line-icon-set-shopping63" aria-hidden="true"></i> COMPRAR</a></div>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <img src="./images/menu/imagem-menu.jpg" class="img-responsive" style="position: relative; left: 55px">
                    </div>
                </li>
              </ul>
            </li><!--
            <li><a href="category/outlet">Outlet <span class="caret"></span></a>
              <ul style="height: 430px; padding: 20px">
                <li style="background: none;">
                    <div class="col-md-4" style="text-align: left;">
                      <a href="#1">Categoria</a>
                      <a href="#2">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                      <a href="#3">Categoria</a>
                    </div>
                    <div class="col-md-4">
                      
                      <div class="product reveal-inline-block">
                        <div class="product-media"><a href="single-product.html"><img alt="" src="images/index-12.jpg" width="290" height="389" class="img-responsive"></a>
                          <div class="product-overlay"><a href="single-product.html" class="icon icon-circle icon-base fl-line-icon-set-shopping63" style="padding: 0"></a></div>
                        </div>
                        <div class="offset-top-10">
                          <p class="big"><a href="single-product.html" class="text-base">6-mm Round Birthstone Stud Earrings</a></p>
                        </div>
                        <div class="product-price text-bold">$258.89 <span class='font-default text-light text-muted text-strike small'>$278.96</span></div>
                         <div class="text-bold">ou <span class='font_rosa2'>6x</span> de <span class='font_rosa2'>R$ 000,00</span><br />sem juros</div>
                      </div>

                    </div>
                    <div class="col-md-4">
                      <img src="./images/menu/imagem-menu.jpg" class="img-responsive" style="position: relative; left: 55px">
                    </div>
                </li>
              </ul>
            </li>-->
            <li><a href="blog/" target="_self">Blog</a></li>			
		    <li class="menu_entre_para_clube"><a href="seja_vip.php">Seja VIP</a></li>
          </ul>
    </div>
    <?php } ?>
    </nav>
  </div>
</header>