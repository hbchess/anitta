<?php
$titlepage = "Obrigado! | Anitta Store - Produtos de qualidade e com garantia.";
require ( 'heard-checkout.php' );
?>
      
      <!-- Page Content-->
      <main class="page-content">
      <div class="shell" style="padding: 30px 0px;">

		 <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12 col-md-offset-2" style="background-color: #fff;">
		 
		 <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12 col-md-offset-1">
		 
		 <div class="col-md-2 col-lg-2 col-xs-3 col-sm-3"  style="padding:0px; text-align: left; margin-top: 10px;">
		 <li class="fa fa-4x fa-check-circle" style="color:#DDC4D3"></li>
			 </div>
			 
			 <div class="col-md-10 col-lg-10 col-xs-9 col-sm-9"  style="padding:0px; text-align:center;">
		 <h1 style="color:#DDC4D3; font-size:30px;"><b>Obrigada pela sua compra!!!</b></h1>
		<p><b><h2 style="font-size:14px;">Parabéns! Você acaba de adquir um produto de qualidade e com garantia.</h2></b></p>
			 </div>
			 
			 
			 
			 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 bg_numero_obrigado" >
			 O número de seu pedido é: 2016999999
			 </div>
			 
			 
			 <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12"  style="padding:0px; text-align:center;">
		 
		<p><b>Você receberá um email com os detalhes do pedido e link para acompanhar seu progresso.</b></p>
		 
		 <button class="btn btn-success" style="padding: 7px 30px; margin-top: 20px;">Gerar Boleto</button>
			 </div>

			 </div>

		  </div>
		  <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 espaco_voltar">
          <p><a class="more link-choose-more-products" href="index.php" role="button"><span class="fa fa-chevron-left"></span> Voltar para a loja</a></p>
		  </div>
		  
		  </div>	
</main>
     <div style="clear: both"></div>
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
$(window).on('load', function() { // makes sure the whole site is loaded 
$('#status').fadeOut(); // will first fade out the loading animation 
$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
$('body').delay(350).css({'overflow':'visible'});
});  
//]]>
</script>


</body>
</html>