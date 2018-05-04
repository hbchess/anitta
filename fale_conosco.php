<?php
$titlepage = "Fale Conosco | Anitta Store - Produtos de qualidade e com garantia.";
require ( 'heard.php' );
?>
      
      
      <!-- Page Content-->
     <main class="page-content">
        <div class="shell">
          <div>
            <ol class="breadcrumb">
              <li><a href="./" class="icon icon-sm fa-home text-primary"></a></li>
                         <li class="active"><font class="breadcrumb_pagina">Fale Conosco</font></li>
            </ol>
          </div>
        </div>
        <div class="shell section-bottom-60">
          <div class="range">
            <div class="cell-md-8" style="text-align: left;">
<div class="cell-md-8 text-xs-left">
              <h1 class="titulo_pagina">Informações de Contato</h1>
              <p>Estamos sempre prontos para ajudá-lo. Há muitas maneiras de entrar em contato conosco. Você pode enviar por este formulário abaixo, nos ligar, enviar um WhatsApp ou enviar um e-mail, escolha o que mais lhe convier.</p>
              <p>&nbsp;</p>
              Whatsapp: (11) 94154-3140<br />
              Telefone: (11) 4200-0224<br />
              E-mail: <a href="mailto:atendimento@anittastore.com">atendimento@anittastore.com</a><br />
              <hr class="divider divider-offset-lg divider-gray">
              <!-- RD Mailform-->
              <form data-result-class="rd-mailform-validate" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="offset-top-20 rd-mailform">
                <label for="name" class="text-italic">Seu Nome:<span class="text-primary">*</span></label>
                <input id="name" type="text" name="name" data-constraints="@NotEmpty"  maxlength="50">
                <label for="email" class="text-italic">Seu E-mail:<span class="text-primary">*</span></label>
                <input id="email" type="text" name="email" data-constraints="@NotEmpty @Email"  maxlength="50">
                <label for="message" class="text-italic">Sua Mensagem:<span class="text-primary">*</span></label>
                <textarea id="message" name="message" data-constraints="@NotEmpty"></textarea>
               <div class="col-xs-12" style="text-align: center;">
                 <button class="btn btn-rosa">Enviar</button>
				  </div>
              </form>
              <!-- Rd Mailform result field-->
              <div class="rd-mailform-validate"></div>
            </div>
            </div>
            <div class="cell-md-3 cell-md-preffix-1 sidebar sidebar-sm sidebar-right text-md-left">
              <div class="range">
                <div class="cell-md-12 cell-sm-6 offset-top-45 offset-md-top-0">
                  <h2 class="font_rosa3">Categorias</h2>
                  <ul class="offset-top-20 list-dividers">
                    <li><a href="category.php">Anéis</a></li>
                    <li><a href="category.php">Brincos</a></li>
                    <li><a href="category.php">Colares</a></li>
                    <li><a href="category.php">Pulseiras</a></li>
                  </ul>
                </div>
                <div class="cell-sm-6 cell-md-12 cell-md-push-9 offset-top-60">
                  <div class="well text-center">
                    <h2 class="tituloNosSiga"># Nos siga</h2>
                    <p class="offset-top-10">&quot;Leia nossas últimas notícias em nossas redes sociais&quot;</p>
                    <ul class="offset-top-4 elements-group-18 reveal-inline-block text-middle">
 <li><a href="https://www.facebook.com/anittastorebrasil/" class="text-gray icon icon-xs fa-facebook"></a></li>
<li><a href="https://www.instagram.com/anittastorebrasil/" class="text-gray icon icon-xs fa-instagram"></a></li>
<li><a href="https://twitter.com/anittastore/media" class="text-gray icon icon-xs fa-twitter"></a></li>
<li><a href="https://br.pinterest.com/anittastore/" class="text-gray icon icon-xs fa-pinterest"></a></li>
<li><a href="https://www.youtube.com/channel/UCqYRLzb1zdJ7yOmIw6zTibw" class="text-gray icon icon-xs fa-youtube"></a></li>
<li><a href="https://plus.google.com/+anittastore" class="text-gray icon icon-xs fa-google-plus"></a></li>
                    </ul>
                    <hr class="divider divider-dotted divider-iron divider-offset-sm">
                    <p class="offset-top-10">Receba as últimas novidades e descontos exclusivos! Ganhe 10% de desconto em sua primeira compra!!<br>Você receberá por e-mail novidades, ofertas exclusivas e artigos de nosso blog </p>
                    <!-- Rd Mailform result field-->
                    <div class="rd-mailform-validate"></div>
                    <!-- RD Mailform-->
                    <form data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" action="bat/rd-mailform.php" class="offset-top-10 rd-mailform">
                     <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Informe seu email"   maxlength="50">
                      <button class="offset-top-10 btn btn-block btn-rosa">SE INSCREVA</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
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