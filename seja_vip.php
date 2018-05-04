<?php
$titlepage = "Seja VIP | Anitta Store - Produtos de qualidade e com garantia.";
require ( 'heard.php' );
?>
      
      <!-- Page Content-->
     <main class="page-content">
        <div class="shell">
          <div>
            <ol class="breadcrumb">
              <li><a href="./" class="icon icon-sm fa-home text-primary"></a></li>
                         <li class="active"><font class="breadcrumb_pagina">Seja vip.</font></li>
            </ol>
          </div>
        </div>
        <div class="shell section-bottom-60">
          <div class="range">
            <div class="cell-md-12" style="text-align: left;">
              <form method="POST" action="" name="formClube">               
                <div class="area_inscricao_clube">
                  <h1>Seja VIP e ganhe benefícios, descontos e muito mais!</h1>
                  <label for="nome"><h2 style="font-size:20px; padding:0px;"><strong>Digite abaixo seus dados para fazer parte de nossa lista vip!</strong></h2></label> <input type="text" value="" name="nome" id="nome_inscricao_clube" placeholder="Seu nome">
                  <input type="text" value="" name="email" id="email_inscricao_clube" placeholder="Seu melhor e-mail">
                </div>
                <div class="inscricao_clube_messages">
                  <div class="success_message" style="display: none;"></div>
                  <div class="error_message" style="display: none;"></div>
                </div>
                <div class=""><button type="submit" class="botao_inscricao_clube">Inscrever</button></div>
              </form>
            </div>
			
			<!-- VÍDEOS -->
			<div class="col-md-10 col-md-offset-1">
			  <div class="col-md-6 col-xs-12" id="videoColuna2">
  			    <h2 class="font_rosa3">Conheça a Anitta Store</h2>
			    <iframe width="560" height="315" style="width:100%;" src="https://www.youtube.com/embed/sMIu9gP5ruM" frameborder="0" allowfullscreen></iframe>
			  </div>
			  <div class="col-md-6 col-xs-12">
  			    <h2 class="font_rosa3">Porque Comprar Conosco</h2>
			    <iframe width="560" height="315" style="width:100%;" src="https://www.youtube.com/embed/sMIu9gP5ruM" frameborder="0" allowfullscreen></iframe>
			  </div>
			  <div class="clearfix"></div>
			</div>
			<!-- FIM VÍDEOS -->
			
			<!-- TEXTO ADICIONAL -->
			<div class="col-md-10 col-md-offset-1">
			  <div class="col-md-12">
			    <h2 class="font_rosa3"> O que as pessoas estão dizendo sobre nós..</h2>
			    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
			    </p>
			  </div>
			</div>
			<!-- FIM TEXTO ADICIONAL -->
			
          </div>
        </div>
      </main>
      <!-- Page Footer-->
		<?php
	require ( 'foot.php' );
	?>
</div>	
	
<!-- Java script-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
//<![CDATA[
$(window).on('load', function() { // makes sure the whole site is loaded 
$('#status').fadeOut(); // will first fade out the loading animation 
$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
$('body').delay(350).css({'overflow':'visible'});
});  
//]]>
function Men_1(){
$( ".men_2, .men_3" ).hide( 500 );
$( ".men_1" ).toggle( 500 );
}
function Men_2(){
$( ".men_1, .men_3" ).hide( 500 );
$( ".men_2" ).toggle( 500 );
}
function Men_3(){
$( ".men_1, .men_2" ).hide( 500 );
$( ".men_3" ).toggle( 500 );
}
</script>
</body>
</html>