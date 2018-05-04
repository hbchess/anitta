<?php
$titlepage = "Login | Anitta Store - Produtos de qualidade e com garantia.";
require ( 'heard.php' );
?>
<h1 style="display:none;">Login de Cliente</h1>
      
      
  <!-- Page Content-->
  <main class="page-content">

    <div class="shell section-bottom-60 offset-top-4">
      <div class="range">
       <div class="col-sm-12 col-md-8 col-xs-12" style="margin: 20px auto 0 auto;">
       
       <div class="col-sm-12 col-md-12 col-xs-12 btn btn-cinza l_face">
         <h2 style="font-size:12px;" class="btn btn-cinza l_face">FAÇA LOGIN USANDO O FACEBOOK</h2> <li class="fa fa-2x fa-facebook-f borda_redonda50px" style="background-color:#3b5998; padding: 7px; color: #fff; width: 40px; height: 40px;"></li>
	   </div>  
      
      <div class="col-sm-12 col-md-12 col-xs-12 bg_login" style="">
	   <div style="bg_login_clear"></div>
	   <div class="col-sm-12  col-md-6 col-xs-12" style="padding-right: 0px; padding-left: 0px;">
         <div class="col-sm-12  col-md-12 col-xs-12" style="margin:10px 0px 10px 0; background-color:#f2f2f2;">
		 <form data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" action="meus_pedidos.html" class="offset-top-10 rd-mailform">
               <section>
                <div class="range">
                 <div class="cell-md-11 cell-xs-11" style="font-size: 16px; font-weight: bold; text-align: left; 
                 border-bottom: 1px #ccc solid; padding: 5px 0px; margin: 5px 20px 0 20px;">
                    <h3 style="font-size:16px;"><strong>Já sou cadastrado</strong></h3>
                  </div>
                  
                  <div class="cell-md-12 cell-xs-12 offset-top-30"  style="text-align: left; font-weight:bold;">
                   Informe seu Email ou CPF:<br>
                    <input title="EmailCpf" name="emailcpf" id="emailcpf" placeholder="" data-constraints="@NotEmpty" value="" class="form-control" type="text" style="width:100%;">
                  </div>
                                    
                  <div class="cell-md-12 cell-xs-12 offset-top-30"   style="text-align: left; font-weight:bold;">
                   Informe sua senha:<br>
                    <input title="Senha" name="pass" id="pass" placeholder="*******"  data-constraints="@NotEmpty" value="" class="form-control" type="password" style="width:100%;">
                  </div>
                 
                </div>
              </section>
			  
			   <div class="cell-md-12 cell-xs-12" style="margin-top: 20px; font-size: 11px; font-style: italic; text-align: left; font-weight:bold;">
                  <i> <a href="#lembrar_senha" class="open-popup-link">Esqueci minha senha</a></i>
                  </div>
				  
              <div>
                <div class="buttons-set-order text-center" style="margin:10px 0px;">
				  <button class="offset-top-10 btn btn-block btn-rosa">Entrar</button>
                </div>
              </div>
			 </form> 
		  </div>   
      </div>
      
      
      
      <div class="col-sm-12  col-md-6 col-xs-12" style="padding-right: 0px; padding-left: 0px;">
         <div class="col-sm-12  col-md-12 col-xs-12" style="margin:10px 0 0 0; background-color:#f2f2f2;">
		  <form data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" action="cadastro.html" class="offset-top-10 rd-mailform">
<section>
                <div class="range">
                 <div class="cell-md-11 cell-xs-11" style="font-size: 16px; font-weight: bold; text-align: left; 
                 border-bottom: 1px #ccc solid; padding: 5px 0px; margin: 5px 20px 0 20px;">
                  <h3 style="font-size:16px;"><strong>Não sou cadastrado</strong></h3>
                  </div>
                  
                  <div class="cell-md-12 cell-xs-12 offset-top-30"  style="text-align: left; font-weight:bold;">
                   Informe seu Email:<br>
                    <input title="Email" name="email" id="email" data-constraints="@NotEmpty @Email" placeholder="" value="" class="form-control" type="text" style="width:100%;">
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
      </div>
	  
	  </div>
       
       
       
       
       
      
      </div>
    </div>
  </main>
  <!-- Page Footer-->
	<?php
	require ( 'foot2.php' );
	?>
<!-- FOOTER LINK-->
</div>


<div id="lembrar_senha" class="white-popup mfp-hide">
         <div class="col-sm-12  col-md-12 col-xs-12" style="margin:10px 0px 10px 0; background-color:#f2f2f2;">
		 <form data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" action="#" class="offset-top-10 rd-mailform">
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

<!-- Java script--> 
<script src="js/core.min.js"></script> 
<script src="js/script.js"></script> 
<script type="text/javascript">
			//<![CDATA[
			$( window ).on( 'load', function () { // makes sure the whole site is loaded 
				$( '#status' ).fadeOut(); // will first fade out the loading animation 
				$( '#preloader' ).delay( 350 ).fadeOut( 'slow' ); // will fade out the white DIV that covers the website. 
				$( 'body' ).delay( 350 ).css( {
					'overflow': 'visible'
				} );
				var w = $( window ).width();
				if ( w <= 500 ) {
		$('.l_face').css('font-size','12px').html('Faça login usando o facebook <li class="fa fa-facebook-f borda_redonda50px" style="background-color:#3b5998; padding: 7px; color: #fff; width: 25px; height: 25px;"></li>');
				$('.bg_login').css('background-color','#fff');
				}
				
$('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true
});

			} );
			//]]>
		</script> 

</body>
</html>