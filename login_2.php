<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Anitta Store - Produtos de qualidade e com garantia.</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    
     <!--meta charset="utf-8"-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic%7CRoboto:400,300,100,700,300italic,400italic,700italic%7CMontserrat:400,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Marck+Script" />
    <link rel="stylesheet" href="css/style2.css">  
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->

  </head>
  <body style="background-image: url(images/bg_login.jpg); background-repeat: repeat-x;" >
    <!-- Page-->

        <div class="row" style="margin: 12% 0px;">
          <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12 col-md-offset-4 borda_redonda10px" style="border: #ccc 1px solid; background-color: #fff;">
          <div style="margin: 10px">
          <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center" style="margin: 5px; border-bottom:1px solid #DDC4D3;">
          	<img src="images/logo.png" alt="">
          	<br><span style="font-size:11px; font-style: italic; float: right; margin-right: 58px;">Produtos com qualidade e garantia!</span>
			  </div>
        

<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center">
Selecione uma das opções para logar
</div>
<div class="row" style="margin-bottom: 10px;"> 
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 btn btn-azul" style="margin: 0px; padding: 5px;">
<div class="col-md-11 col-lg-11 col-xs-10 col-sm-10" style="text-align: left; margin: 5px 0 0; padding: 0px; text-transform: none;">
Logar com o facebook </div>
<div class="col-md-1 col-lg-1 col-xs-2 col-sm-2" style="text-align: left; margin: 0px; padding: 0px;">
<span class="fa fa-2x fa-facebook-square" ></span>
</div>
</div>
</div>
        
        <div class="row" style="margin-bottom: 10px;"> 
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 btn btn-rosa" style="margin: 0px; padding: 5px;" onClick="Login();">
<div class="col-md-11 col-lg-11 col-xs-10 col-sm-10" style="text-align: left; margin: 5px 0 0; padding: 0px; text-transform: none;">
Logar com email e senha </div>
<div class="col-md-1 col-lg-1 col-xs-2 col-sm-2" style="text-align: left; margin: 0px; padding: 0px;">
<span class="fa fa-2x fa-lock"></span>
</div>
</div>
</div>
       
       <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 login" style="margin: 10px 0px; padding: 0px; display: none">
        <form data-result-class="rd-mailform-validate" data-form-type="contact" method="post" action="" class="rd-mailform">
       
<input type="text" class="form-control" placeholder="Coloque seu email" id="email" name="email"  required value="" data-constraints="@NotEmpty @Email">
<input type="password" class="form-control" placeholder="******" id="senha" name="senha" required  value="" data-constraints="@NotEmpty">

			   <div class="cell-md-12 cell-xs-12" style="margin-top: 20px; font-size: 11px; font-style: italic; text-align: left; font-weight:bold;">
                  <i> <a href="#lembrar_senha" class="open-popup-link">Esqueci minha senha</a></i>
                  </div>
				  
<div class="row" style="margin-bottom: 10px;">  
<div class="col-md-5 col-lg-5 col-xs-5 col-sm-5" style="margin: 10px 0 0 35%; padding: 5px; text-transform: none;">
<button class=" btn btn-rosa">Entrar</button>
</div>
</div>
		   </form>
</div>
       
        
 <div class="row" style="margin-bottom: 10px;"> 
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 btn btn-success" style="margin: 0px; padding: 5px;" onClick="Pass();">
<div class="col-md-11 col-lg-11 col-xs-10 col-sm-10" style="text-align: left; margin: 5px 0 0; padding: 0px; text-transform: none;">
Receber senha por email </div>
<div class="col-md-1 col-lg-1 col-xs-2 col-sm-2" style="text-align: left; margin: 0px; padding: 0px;">
<span class="fa fa-2x fa-envelope"></span>
</div>
</div>
</div>

       <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 pass" style="margin: 10px 0px; padding: 0px;  display: none">
       <form data-result-class="rd-mailform-validate" data-form-type="pass" method="post" action="" class="rd-mailform">
<input type="text" class="form-control" placeholder="Coloque seu email" id="email" name="email" value="" data-constraints="@NotEmpty @Email">
<div class="row" style="margin-bottom: 10px;" >  
<div class="col-md-5 col-lg-5 col-xs-5 col-sm-5" style="margin: 10px 0 0 30%; padding: 5px; text-transform: none;">
<button class=" btn btn-success">Solicitar</button>
</div>
</div>
		   </form>
</div>
        

         
         </div>
          </div>
         </div>
  
<div id="lembrar_senha" class="white-popup mfp-hide">
         <div class="col-sm-12  col-md-12 col-xs-12" style="margin:10px 0px 10px 0; background-color:#f2f2f2;">
		 <form data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" action="meus_pedidos.html" class="offset-top-10 rd-mailform">
               <section>
                <div class="range">
                 <div class="cell-md-11 cell-xs-11" style="font-size: 16px; font-weight: bold; text-align: left; 
                 border-bottom: 1px #ccc solid; padding: 5px 0px; margin: 5px 20px 0 20px;">
                  ESQUECI MINHA SENHA
                  </div>
                  
                  <div class="cell-md-12 cell-xs-12 offset-top-30"  style="text-align: left;">
                   Digite abaixo seu e-mail ou CPF com que se cadastrou na loja e receba sua senha por email.<br><br>
                    
                  </div>
                                    
                  <div class="cell-md-12 cell-xs-12 offset-top-30"   style="text-align: left; font-weight:bold;">
                   Informe seu e-mail:<br>
                   <input title="LembrarSenha" name="LembrarSenha" id="LembrarSenha" placeholder="" data-constraints="@NotEmpty @Email" value="" class="form-control" type="text" style="width:100%;">
                  </div>
                 
                </div>
              </section>
			  
				  
              <div>
                <div class="buttons-set-order text-center" style="margin:10px 0px;">
				  <button class="offset-top-10 btn btn-block btn-rosa">Continuar</button>
                </div>
              </div>
			 </form> 
			 </div>
			 <div style="clear:both"></div>
</div>  

    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
    <script>
				$( window ).on( 'load', function () { // makes sure the whole site is loaded 
				$('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true
});
});
			
			function Login() {
				$( '.pass' ).hide();
				$( '.login' ).show();
				//$( ".l1" ).css( { display: "block"	} );
			}

			function Pass() {
				$( '.login' ).hide();
				$( '.pass' ).show();
			}

		</script>
		
  </body>
</html>