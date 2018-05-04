<?php
$titlepage = "Finalizar Pedido | Anitta Store - Produtos de qualidade e com garantia.";
require ( 'heard-checkout.php' );
?>
      
      
      <!-- Page Content-->
           <main class="page-content">
        <div class="shell section-bottom-60 offset-top-4">
          <form action="checkout.html" data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" class="rd-mailform shoping-cart">
            <div class="clearfix offset-top-30">
             <p <h1 class="font_rosa3" style="font-size:40px;">Finalizar Compra</h1></p>
             <div class="clearfix divider divider-offset-sm" style="margin:0px;">
              <div class="pull-sm-left offset-top-30 offset-sm-top-0">
                <div class="form-inline-flex reveal-xs-flex">
                  <button type="submit" class="btn btn-rosa offset-xs-left-10 offset-top-10 offset-xs-top-0 borda_redonda10px"><span class="fa fa-chevron-left"></span> Voltar para o carrinho</button>
                </div>
              </div>
              </div>
              <div class="clearfix divider divider-offset-sm" style="margin:20px 0 0 0">
              <span><h2 style="font-size:22px;">Informe seu email  ou conecte-se via facebook para  fechar o seu  pedido.</h2></span>
              </div>
              <div class="range">
              <div class="clearfix divider divider-offset-sm  cell-md-6 cell-xs-12" style="padding:4px; margin:0px auto; border:#DDC4D3 1px solid;">
              <div class="range">
			  
               <div class="cell-md-9 cell-xs-8">
    <input type="text" name="email" id="email" class="form-control" data-constraints="@NotEmpty @Email" placeholder="Informe seu email aqui" style="margin-left:10px;border: none;">
    </div>
                   <div class="cell-md-3 cell-xs-4" style="margin-left:0px;">
   <button type="submit" class="btn btn-success offset-xs-left-10 offset-top-10 offset-xs-top-0">Continuar</button>
    </div>
	
	
    </div>
              </div>
              </div>
                 
              <div class="range" style="margin-top:0px;">
              <div class="clearfix divider cell-md-4 cell-xs-12" style="margin:0px auto;">
             
               <div class="cell-md-12 cell-xs-12">
    <img src="images/msg_compra.png" class="img-responsive">
    </div>
    
              </div>
              </div>
            </div>
            <hr class="offset-top-30 divider divider-gray">
            <div class="clearfix offset-top-30">
            <div class="range">
            <div class="cell-md12 cell-xs-12" style="margin-left:0px; text-align: center; background-color:#4b4bb3; color: #fff; font-size: 18px; cursor: pointer; padding: 15px 0px;">
            Continuar via Facebook
            </div>
</div>
            </div>
          </form>
        </div>
      </main>
      <!-- Page Footer-->
	<?php
	require ( 'foot2.php' );
	?>
<!-- FOOTER LINK-->
</div>
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