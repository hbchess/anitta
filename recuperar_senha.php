<?php
$titlepage = "Recuperação de Senha | Anitta Store - Produtos de qualidade e com garantia.";
require ( 'heard.php' );
?>
      
      
  <!-- Page Content-->
  <main class="page-content">

    <div class="shell section-bottom-60 offset-top-4">
      <div class="range">
       <div class="col-sm-12 col-md-4 col-xs-12" style="margin: 20px auto 0 auto;">
            
      
	   <div class="col-sm-12  col-md-12 col-xs-12" style="padding-right: 0px; padding-left: 0px;">
         <div class="col-sm-12  col-md-12 col-xs-12" style="margin:10px 0px 10px 0; background-color:#f2f2f2;">
		 <form data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" action="" class="offset-top-10 rd-mailform">
               <section>
                <div class="range" id="input">
                 <div class="cell-md-11 cell-xs-11" style="font-size: 16px; font-weight: bold; text-align: left; 
                 border-bottom: 1px #ccc solid; padding: 5px 0px; margin: 5px 20px 0 20px;">
                 <h1 style="font-size:16px;"><strong>DIGITE SUA NOVA SENHA</strong></h1>
                  </div>
                                    
                  <div class="cell-md-12 cell-xs-12 offset-top-30"   style="text-align: left; font-weight:bold;">
                   Nova senha:<br>
                    <input title="Senha" name="pass" id="pass" placeholder="*******"  data-constraints="@NotEmpty" value="" class="form-control" type="password" style="width:100%;">
               
				 </div>
				 
				  <div class="cell-md-12 cell-xs-12 offset-top-30"   style="text-align: left; font-weight:bold;">
                   Confirmar nova senha:<br>
                    <input title="Senha" name="pass" id="pass" placeholder="*******"  data-constraints="@NotEmpty" value="" class="form-control" type="password" style="width:100%;">               
				 </div>
				 
				  <div class="cell-md-12 cell-xs-12 img" style="text-align: left; font-weight:bold; cursor:pointer;">
                   <img src="http://i.stack.imgur.com/H9Sb2.png" alt="Ver Senha">Ver Senha
				 </div>
				 
                 
                </div>
              </section>

              <div>
                <div class="buttons-set-order text-center" style="margin:10px 0px;">
				  <button class="offset-top-10 btn btn-block btn-rosa">ALTERAR SENHA</button>
                </div>
              </div>
			 </form> 
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
				}
			} );
			//]]>
						var input = document.querySelector('#input input');
var img = document.querySelector('#input .img');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});
		</script> 

</body>
</html>