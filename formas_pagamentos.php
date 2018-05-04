<?php
$titlepage = "Forma de Pagamento | Anitta Store - Produtos de qualidade e com garantia.";
require ( 'heard.php' );
?>
      
      <!-- Page Content-->
     <main class="page-content">
        <div class="shell">
          <div>
            <ol class="breadcrumb">
              <li><a href="./" class="icon icon-sm fa-home text-primary"></a></li>
             <li class="active"><h1 class="breadcrumb_pagina">Forma de Pagamento</h1></li>
            </ol>
          </div>
        </div>
        <div class="shell section-bottom-60">
          <div class="range">
            <div class="cell-md-8" style="text-align: left;">
<p>O pagamento de suas compras poderá ser efetuado via cartão de credito ou boleto bancário.</p>
<p>A política de parcelamento pode alterar, consulte-a no momento da compra para saber a quantidade de parcelas e o valor da parcela mínima.</p>
<p>Toda a operação é feita em ambiente totalmente seguro. Para maiores informações, clique ao lado <b>“É Seguro Comprar?"</b></p>
<p>Caso tenha alguma dúvida sobre cobranças inválidas ou não autorizadas, entre em contato com a nossa equipe, através do <b>Fale Conosco.</b></p>
<p><b>Cartão de Crédito:</b></p>
<p>Caso você deseje parcelar sua compra, o pagamento com cartão de crédito é a forma ideal e pode ser feito em até 6 x sem juros.</p>
<p>Seu pedido será enviado somente após a confirmação de pagamento pela operadora de crédito.</p>
<p>Caso haja recusa pela operadora de cartão da solicitação de compra, o pedido será cancelado automaticamente e será enviado um email pelo departamento responsável da Anitta Store. Portanto, é importante deixar seu cadastro sempre atualizado. Caso isso ocorra, verifique o motivo junto a administradora de seu cartão de crédito.</p>
<p>Obs: Após a finalização de sua compra, as opções de pagamento e parcelamento não poderão ser alteradas.</p>
<p><b>Boleto Bancário:</b></p>
<p>Esta opção é válida para pagamento à vista e não permite parcelamento. Para fazer o pagamento, selecione a opção Boleto Bancário, no final de sua compra, e clique em Confirmar Pagamento, sem seguida clique em Gerar Boleto. Imprima o boleto bancário e pague em qualquer agência bancária, pela internet ou casa lotérica. Você também receberá via email o boleto gerado para o pagamento de sua compra.</p>
<p>A confirmação de pagamento é feita automaticamente pelos bancos em até 2 (dois) dias úteis após o pagamento, sendo assim, não é preciso enviar qualquer notificação. Se você pagar seu boleto com cheque, esse prazo de confirmação pode se estender a até 4 (quatro) dias úteis.</p>
<p>A data de vencimento do boleto é sempre 3 (três) dias após o fechamento do pedido, após esta data, o boleto perde a validade e caso ainda tenha interesse em adquirir o(s) item(s), você deverá fazer um novo pedido.</p>
<p>A sua compra só será enviada após o banco confirmar o pagamento do seu boleto.</p>
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