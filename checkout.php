<?php
$titlepage = "Finalizar Compra | Anitta Store - Produtos de qualidade e com garantia.";
require ( 'heard-checkout.php' );
?>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<style>
	#divMostra3,#divMostra2,#divMostra4  {
	 
	display:none;
	}
</style>
<?php $animation = "height: 'toggle'"; //"left: '250px',opacity: '0.5',
            //height: '150px',
            //width: '150px'";?>
<script type="text/javascript"> 
	
	$(document).ready(function(){

			$('#mostra1').hide();
			$('#mostra2').hide();
			$('#mostra3').hide();
			$('#mostra4').hide();

	      $('#mostra1').click(function(){
			//mostra div
		  	$('#divMostra1').show();
		  	$('#divMostra2').hide();
		  	$('#divMostra3').hide();
		  	$('#divMostra4').hide();
		  		
	      });

	      $('#mostra2').click(function(){
			//mostra div
		  	$('#divMostra1').hide();
		  	$('#divMostra2').show();
		  	$('#divMostra3').hide();
		  	$('#divMostra4').hide();
		  		
	      });

	      $('#mostra3').click(function(){
			//mostra div
		  	$('#divMostra1').hide();
		  	$('#divMostra2').hide();
		  	$('#divMostra3').show();
		  	$('#divMostra4').hide();
		  		
	      });

	      $('#mostra4').click(function(){
			//mostra div
		  	$('#divMostra1').hide();
		  	$('#divMostra2').hide();
		  	$('#divMostra3').hide();
		  	$('#divMostra4').show();
		  		
	      });

	      $('#fecha1').click(function(){
			//oculta div
			$("#divMostra2").animate({<?php echo $animation;?>});	
		  	$('#divMostra1').hide();
			$('#divMostra2').show();
			$('#mostra1').show();
		  	
	      });
		  
		   $('#fecha2').click(function(){
			//oculta div
			$("#divMostra3").animate({<?php echo $animation;?>});	
		  	$('#divMostra2').hide();
			$('#divMostra3').show();
		  	$('#mostra2').show();	
	      });
		   $('#fecha3').click(function(){
			//oculta div
			$("#divMostra4").animate({<?php echo $animation;?>});	
		  	$('#divMostra3').hide();
			$('#divMostra4').show();
		  	$('#mostra3').show();
		  	$('#mostra4').show();
	      });
		  
		  
	 });
	 
     
</script>

      
      
  <!-- Page Content-->
  <main class="page-content">
    <div class="shell">
      <div>
        <div class="payment payment-head" id="payment-head">
          <h1 class="font_rosa">Finalizar compra</h1>
        </div>
      </div>
    </div>
    <div class="shell section-bottom-60 offset-top-4">
      <div class="range">
        <div class="form-content col-sm-12  col-md-8 col-xs-12" style="margin: 0 auto;">
		
		<div id="opc-billing" class="cart_totals form-group section allow active">
		
							<div class="step-title">
								<span class="number">1</span>
								<h2>Dados pessoais</h2>
								<a class="editLayer l1" href="#" onClick="EditL('checkout-step-billing')" id="mostra1">Alterar</a>
							</div>
							<div id="divMostra1" class="step a-item" style="display:visible;">
								<form action="" id="co-payment-form">
									<section>
										<div class="range offset-top-10">
										
										    <div class="col-md-7 col-xs-12">							
										    	<input title="E-mail" name="email" id="email" placeholder="E-mail" maxlength="50" value="" class="form-control" type="text" style="width:100%;">
										    	<span class="6 msg_erro_checkout"></span>										     
										    </div>
										    
										    <div class="col-md-1 col-xs-12 lblOu">ou</div>
										    
										    <div class="col-md-4 col-xs-12">
										      <!-- FACEBOOK -->
										      <div class="cell-md12 cell-xs-12" style="text-align: center; background-color:#4b4bb3; color: #fff; font-size: 18px; cursor: pointer; padding: 11px 0px;">
                                                Continuar via Facebook
                                              </div>
										      <!-- FIM FACEBOOK -->
										    </div>											
										
										    <div class="clearfix"></div>
											
										    <div class="cell-md-12 cell-xs-12" style="margin-top: 10px; position:relative;">										
												<input title="Nome" name="nome" id="nome" placeholder="Nome" maxlength="50" value="" class="form-control" type="text" style="width:100%;">
											 <span class="7 msg_erro_checkout"></span>
											</div>
											
											<div class="cell-md-6 cell-xs-12" style="margin-top: 10px; position:relative;">
												<input title="Cpf" name="cpf" id="cpf" placeholder="CPF" value="" maxlength="14" class="form-control" type="text" style="width:100%;">
											 <span class="8 msg_erro_checkout"></span>
											</div>
											
											<div class="cell-md-6 cell-xs-12" style="margin-top: 10px; position:relative;">
												<input title="Celular" name="celular" id="celular" placeholder="Celular" maxlength="14" value="" class="form-control" type="text" style="width:100%;">
											 <span class="9 msg_erro_checkout"></span>
											</div>
											
										</div>
									</section>
									
								</form>
								<div class="buttons-set-order text-center" style="margin:10px 0px;">
								
									<button type="button" href="javascript: void(0);" class="button btn btn-success" onclick="Stp3();"><span>Ir para entrega</span></button>
								</div>
							</div>
						</div>
		
		
          <div id="opc-payment" class="form-group section">
            <div class="step-title"> <span class="number">2</span>
              <h2>Entrega</h2>
              <a class="editLayer l2" href="#"  onClick="EditL('checkout-step-payment')" id="mostra2">Alterar</a> </div>
            <div id="divMostra2"  style="">
			
              <section>
                <div class="range">
                  <div class="cell-md-6 cell-xs-12 offset-top-30" style="position:relative;">
                    <input title="Cep" name="cep" id="cep" maxlength="9" placeholder="00000-000" value="" class="form-control" type="text" style="width:100%;">
					<span class="0 msg_erro_checkout"></span>
                  </div>
                  <div class="cell-md-6 cell-xs-12 offset-top-30" style="position:relative;">
                    <input title="Estado" name="estado" id="estado" maxlength="30" placeholder="Uf" value="" class="form-control" type="text" style="width:100%;">
                  <span class="1 msg_erro_checkout"></span>
				  </div>
                  <div class="cell-md-6 cell-xs-12 offset-top-30" style="position:relative;">
                    <input title="Cidade" name="cidade" id="cidade" maxlength="30" value="" placeholder="Cidade" class="form-control" type="text" style="width:100%;">
                  <span class="2 msg_erro_checkout"></span>
				  </div>
                  <div class="cell-md-6 cell-xs-12 offset-top-30" style="position:relative;">
                    <input title="Bairro" name="bairro" id="bairro" value="" maxlength="30" placeholder="Bairro" class="form-control" type="text" style="width:100%;">
                 <span class="3 msg_erro_checkout"></span>
				 </div>
                  <div class="cell-md-12 cell-xs-12 offset-top-30" style="position:relative;">
                    <input title="Endereco" name="endereco" id="endereco" value="" maxlength="50" placeholder="Endereço" class="form-control" type="text" style="width:100%;">
                  <span class="4 msg_erro_checkout"></span>
				  </div>
                  <div class="cell-md-6 cell-xs-12 offset-top-30" style="position:relative;">
                    <input title="Numero" name="numero" id="numero" value="" placeholder="Nº" maxlength="9" class="form-control"  onkeyup="somenteNumeros(this);" type="text" style="width:100%;" >
                  <span class="5 msg_erro_checkout"></span>
				  </div>
                  <div class="cell-md-6 cell-xs-12 offset-top-30">
                    <input title="Complemento" name="comple" id="comple" value="" maxlength="30" placeholder="Complemento" class="form-control" type="text" style="width:100%;">
                  </div>
                </div>
              </section>
			  
			  <div id="ver" style=" ">
			  <br>
			  <h3 style="font-size:14px;"><b>Tipo de entrega</b></h3><br>
				<div style="margin:10px 0px; position:relative;">
					<select class="cs-select form-control cs-skin-border card_expiration_month">
							<option value="1" selected="selected">Rápida | Até 10 dias: R$ 19,90</option>
							<option value="2">econômica | Até 14 dias: Grátis</option>
							<option value="3">E-Sedex | Até 4 dias: R$ 22,90</option>
					</select>
				</div>
		     <div>
                <div class="buttons-set-order text-center" style="margin:10px 0px;">
                  <button type="button" title="Próximo" class="button btn btn-success" onclick="Stp1();"><span><span>Ir para pagamento</span></span></button>
                </div>
              </div>
			  
            </div>
          </div>
		  
		  
		  
		  <div id="opc-payment" class="form-group section">
            <div class="step-title"> <span class="number">3</span>
              <h2>Pagamento</h2>
              <a class="editLayer l2" href="#"  onClick="EditL('checkout-step-payment')" id="mostra3">Alterar</a> </div>
            <div id="divMostra3"  style="">
			
              <section>
                <fieldset>
										<div class="method" id="method">
											<div class="range" style="margin: 0px">
														  <div class="col-sm-12  col-md-12 col-xs-12" style="text-align: left; padding: 0px;">
			  <span class="10" style="font-size:11px; color:red;"></span>
			  </div>
												<div class="col-sm-2  col-md-1 col-xs-2">
													<input id="p_method1" value="Boleto" name="p_method" title="Boleto bancário" class="radio css-checkbox paymentMethodType" type="radio" onclick="Boleto();">
												</div>
												<div class="col-sm-10  col-md-3 col-xs-10" style="text-align: left;">
													Boleto Bancário
												</div>
												<div class="clearfix col-sm-12  col-md-12 col-xs-12" style=" margin:10px 0px;"></div>
												<div class="col-sm-2  col-md-1 col-xs-2">
													<input id="p_method2" value="Cartao" name="p_method" title="Cartão" class="radio css-checkbox paymentMethodType" type="radio" onclick="Cartao();">
												</div>
												<div class="col-sm-10  col-md-3 col-xs-10" style="text-align: left;">
													Cartão de Crédito
												</div>
											</div>
											<div class="clearfix col-sm-12  col-md-12 col-xs-12" style=" margin:10px 0px;"></div>
											<div class="clearfix col-sm-12  col-md-12 col-xs-12 pgBoleto" id="Boleto">
												Ao finalizar a compra, redirecionaremos a página para o boleto gerado.<br/>
												<img src="images/icones/boletog.jpg">
											</div>
							<div class="clearfix col-sm-12  col-md-12 col-xs-12 pgCartao" id="Cartao">
												<div class="range" style=" margin:10px 0px;">
												<div style="clear:both"></div>
													<div class="col-sm-12  col-md-12 col-xs-12" style="margin:10px 0px;  position:relative;">
				<input title="Nome no cartão" id="cartao_nome" maxlength="50" name="cartao_nome" type="text" placeholder="Nome no Cartão" class="form-control">
													<span class="nc msg_erro_checkout"></span>
													</div>
													<div style="clear:both"></div>
													<div class="col-sm-12  col-md-12 col-xs-12cell-md-12 cell-xs-12" style=" margin:10px 0px; 10px; position:relative;">
				<input id="numerocartao" name="numerocartao" maxlength="16" title="Número do Cartão" autocomplete="off" type="text" placeholder="Número do Cartão" class="form-control">
													<span class="cn msg_erro_checkout"></span>
													</div>
													<div class="col-sm-12  col-md-4 col-xs-12" style="margin:10px 0px; position:relative;">
														<select id="mes" name="mes" class="form-control month cs-select cs-skin-border card_expiration_month">
															
															<option value="1" selected="selected">01 - Janeiro</option>
															<option value="2">02 - Fevereiro</option>
															<option value="3">03 - Março</option>
															<option value="4">04 - Abril</option>
															<option value="5">05 - Maio</option>
															<option value="6">06 - Junho</option>
															<option value="7">07 - Julho</option>
															<option value="8">08 - Agosto</option>
															<option value="9">09 - Setembro</option>
															<option value="10">10 - Outubro</option>
															<option value="11">11 - Novembro</option>
															<option value="12">12 - Dezembro</option>
														</select>
													</div>
													<div class="col-sm-12  col-md-4 col-xs-12" style=" margin:10px 0px;">
														<select id="ano" name="ano" class="form-control year cs-select cs-skin-border card_expiration_year">
															<option value="2017" selected="select">2017</option>
															<option value="2018">2018</option>
															<option value="2019">2019</option>
															<option value="2020">2020</option>
															<option value="2021">2021</option>
															<option value="2022">2022</option>
															<option value="2023">2023</option>
															<option value="2024">2024</option>
															<option value="2025">2025</option>
															<option value="2026">2026</option>
														</select>
													</div>
													<div class="col-sm-12  col-md-4 col-xs-12" style=" margin:10px 0px; position:relative;">
														<input title="Código de verificação" maxlength="4" class="form-control" id="cvv" name="cvv" autocomplete="off" type="text" placeholder="CVV">
													<span class="ncv msg_erro_checkout"></span>
													</div>
													<div class="col-sm-12  col-md-12 col-xs-12" style=" margin:10px 0px;">
														<select id="" name="parcela" class="form-control month validate-cc-exp required-entry cs-select cs-skin-border card_expiration_month" autocomplete="off">
															<option value="1">1 x R$ 70,00 = R$ 70,00 </option>
															<option value="2">2 x R$ 35,00 = R$ 70,00 </option>
															<option value="3">3 x R$ 23,33 = R$ 70,00 </option>
															<option value="4">4 x R$ 17,50 = R$ 70,00 </option>
															<option value="5">5 x R$ 14,00 = R$ 70,00 </option>
															<option value="6">6 x R$ 11,66 = R$ 70,00 </option>
															<option value="7">7 x R$ 10,88 = R$ 76,16 (juros de 2.15% a.m.)</option>
															<option value="8">8 x R$ 9,64 = R$ 77,12 (juros de 2.20% a.m.)</option>
															<option value="9">9 x R$ 8,72 = R$ 78,48 (juros de 2.35% a.m.)</option>
															<option value="10">10 x R$ 7,98 = R$ 79,80 (juros de 2.45% a.m.)</option>
														</select>
													</div>
												</div>							
											</div>
										</div>
									</fieldset>
              </section>
              <div>
                <div class="buttons-set-order text-center" style="margin:10px 0px;">
                  <button type="button" title="Próximo" class="button btn btn-success" onclick="Stp4();"><span><span>Próximo</span></span></button>
                </div>
              </div>
			  
            </div>
          </div>
		  
		  
		  
		  
		  
          
          
<div id="opc-review" class="form-group section">
<div class="step-title">
<span class="number">4</span>
<h2>Resumo do pedido</h2>
<a class="editLayer l4" href="#" onClick="EditL('checkout-step-revisao')" id="mostra4">Alterar</a>
</div>
<div id="divMostra4" style="">
<div class="range" style="margin-top: 20px;">
<div class="col-sm-12  col-md-3 col-xs-12">
<p><a class="more link-choose-more-products" href="index.php" role="button"><span class="fa fa-chevron-left"></span> Voltar para a loja</a></p>
</div>
<div class="rel_prod" style="padding: 0px 20px;">
<div class="col-sm-12  col-md-12 col-xs-12" style="margin:15px 0px;"></div>
<div class="col-sm-5  col-md-6 col-xs-12" style="text-align:center; font-weight: bold;">
Produtos
</div>
<div class="col-sm-2  col-md-2 col-xs-12" style="text-align:center; font-weight: bold;">
Preço(Unidade)
</div>
<div class="col-sm-2  col-md-2 col-xs-12" style="text-align:center;  font-weight: bold;">
Quantidade
</div>
<div class="col-sm-2  col-md-2 col-xs-12" style="text-align:center;  font-weight: bold;">
Subtotal
</div>
<div class="col-sm-12  col-md-12 col-xs-12" style="clear: both; border-bottom:#999 1px solid; margin:5px 0px;"></div>
<div class="col-md-6 col-sm-5 col-xs-12">
<div class="range">
<div class="col-sm-5  col-md-3 col-xs-12">
<img src="images/product-01-original.jpg" class="img-responsive">
</div>
<div class="col-sm-5  col-md-9 col-xs-12 ipad-center" style="margin-top: 14px;">
<div class="" >
					Descri&ccedil;&atilde;o do produto adquirido						
				</div>
				<div class="">
					Tamanho: GRANDE | MÉDIO | PEQUENO
				</div>
</div>
</div>
</div>
<div class="col-sm-2  col-md-2 col-xs-12" style="text-align:center; margin-top: 14px;">
R$ <span class="font_rosa2"> 00,00</span>
</div>
<div class="col-sm-2  col-md-2 col-xs-12" style="text-align:center; margin-top: 14px;">
1
</div>
<div class="col-sm-2  col-md-2 col-xs-12" style="text-align:center; margin-top: 14px;">
R$ <span class="font_rosa2"> 00,00</span>
</div>
<div class="col-sm-12  col-md-12 col-xs-12">
<div class="range">
<div class="col-sm-6  col-md-12 col-xs-12"  style="border-top:#ccc 1px dotted; float: right; margin: 7px 0px;"></div>
<div class="col-sm-9  col-md-10 col-xs-6" style="text-align: right; font-weight: bold; padding-right: 0px;">
<b>Subtotal: <br/> Frete(Sedex):<br/> Desconto:</b>
</div>
<div class="col-sm-3 col-md-2 col-xs-6 text-right" style="padding-right: 30px;">
R$ 77,00<br/> R$ 77,00<br/> R$ 00,00<br/>
</div>
<div class="col-sm-12  col-md-12 col-xs-12"  style="border-top:#ccc 1px dotted; float: right; margin: 7px 0px;"></div>
<div class="col-sm-9  col-md-10 col-xs-6" style="text-align: right; font-weight: bold; padding-right: 0px;">
<b>Total:<br/> Pagamento em:</b>
</div>
<div class="col-sm-3 col-md-2 col-xs-6 text-right" style="padding-right: 30px;">
<b>R$ 77,00</b><br/><span style="font-size:11px;">Boleto Bancário</span></div>
</div>
</div>
</div>
<div class="rel_prod2">
<!-- Bloco Produtos Celular -->
<div class="col-sm-12  col-md-12 col-xs-12" style="border-bottom:#ccc 1px solid; padding:7px 0px; height:auto; margin-bottom:10px">
<div class="col-sm-3  col-xs-3" style="padding-right:0px">
<img src="images/product-01-original.jpg" class="img-responsive">
</div>
<div class="col-sm-9  col-xs-9" style="font-size:11px">
<div class="col-sm-12  col-md-12 col-xs-12 text-left" style="padding:0px">
Nome do produto adquirido
</div>
<div class="col-sm-7  col-xs-7  text-left" style="padding:0px">
<b>Tamanho:</b>
</div>
<div class="col-sm-5  col-xs-5  text-right" style="padding:0px">
000
</div>
<div class="col-sm-7  col-xs-7  text-left" style="padding:0px">
<b>Quantidade:</b>
</div>
<div class="col-sm-5  col-xs-5  text-right" style="padding:0px; font-size:11px">
1
</div>
<div class="col-sm-7  col-xs-7  text-left" style="padding:0px">
<b>Preço (Unidade):</b>
</div>
<div class="col-sm-5  col-xs-5 text-right" style="padding:0px">
R$ 00,00
</div>
</div>
</div>
<!-- BlocoFechanento Celular -->
<div class="col-sm-12  col-xs-12">
<div class="col-sm-9  col-xs-9  text-left" style="padding:0px">
<b>Subtotal:</b>
</div>
<div class="col-sm-3  col-xs-3 text-right" style="padding:0px">
R$ 00,00
</div>
<div class="col-sm-9  col-xs-9  text-left" style="padding:0px">
<b>Entrega:</b>
</div>
<div class="col-sm-3  col-xs-3 text-right" style="padding:0px">
R$ 00,00
</div>
<div class="col-sm-9  col-xs-9  text-left" style="padding:0px">
<b>Desconto:</b>
</div>
<div class="col-sm-3  col-xs-3 text-right" style="padding:0px">
R$ 00,00
</div>
<div class="col-sm-12  col-xs-12" style="padding:7px; background-color:#ccc; margin-bottom:8px;">
<div class="col-sm-12  col-xs-12  text-right" style="padding:0px">
R$ 2,00
</div>
<div class="col-sm-8  col-xs-8  text-left" style="padding:0px">
<b>Total:</b>
</div>
<div class="col-sm-4  col-xs-4 text-right" style="padding:0px; font-size:12px;">
<b>2x de R$ 6,00</b>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-xs-12 text-left" style="padding:10px 0 0 20px; margin: 10px 0px;">
  <p><a class="btn btn-primary btn-rosa borda_redonda10px" href="cart.php" role="button"><span class="fa fa-chevron-left"></span> Voltar para o carrinho</a></p>
</div>
<div class="col-sm-12 col-xs-12 col-md-12 text-center">
<center>
<div class="buttons-set-order text-center" style="margin:10px 0px;">
<form action="obrigado.html" method="post" target="_self">
<button type="submit" title="Finalizar" class="button btn btn-success"><span>Finalizar compra</span></button>
</form>
</div>
</div>
</center>
</div>
</div>
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
<!-- Java script--> 
<script src="js/core.min.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
	        $("#cep").mask("99999-999",{placeholder:""});
		$("#cpf").mask("999.999.999-99",{placeholder:""});
	  $("#celular").mask("(99) 9999-9999?9",{placeholder:""});
	  
	$("#cep").blur(function() {
                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');
                //Verifica se campo cep possui valor informado.
                if (cep != "") {
                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;
                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {
                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#endereco").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#estado").val("...");
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#endereco").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#estado").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
    	
	
    $("#celular").blur(function(event) {
        if($(this).val().length == 15){
          $('#celular').mask('(99) 99999-999?9');
        } else {
          $('#celular').mask('(99) 9999-9999?9');
        }
    });

    });
	
function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }

			//<![CDATA[
			$( window ).on( 'load', function () { // makes sure the whole site is loaded 
				$( '#status' ).fadeOut(); // will first fade out the loading animation 
				$( '#preloader' ).delay( 350 ).fadeOut( 'slow' ); // will fade out the white DIV that covers the website. 
				$( 'body' ).delay( 350 ).css( {
					'overflow': 'visible'
				} );
			} );
			//]]>

			function EditL( d ){
				$( '#'+d ).show();				
			}
			function Stp1() {
			  var erro = 'Campo Obrigatório';
			  var cp = $("#cep").val();
			  var es = $("#estado").val();
			  var ci = $("#cidade").val();
			  var ba = $("#bairro").val();
			  var en = $("#endereco").val();
			  var nu = $("#numero").val();
			  if ( cp == ''){ $(".0").html(''+erro);return false; } else {$(".0").html('')}
			  if ( es == ''){	$(".1").html(''+erro);return false;} else {$(".1").html('')}
			  if ( ci == ''){	$(".2").html(''+erro);return false; } else {$(".2").html('')}
			  if ( ba == ''){	$(".3").html(''+erro);return false; } else {$(".3").html('')}
			  if ( en == ''){ $(".4").html(''+erro);return false; } else {$(".4").html('')}
			  if ( nu == ''){ $(".5").html(''+erro);return false; } else {$(".5").html('')}
			  	
			  	$( '#opc-billing' ).show();
			  	$( ".l1" ).css( { display: "block"	} );
              
			  if ( cp != '' && es != '' && ci != '' && ba != '' &&en != '' && nu != ''){
			    $("#divMostra3").animate({<?php echo $animation;?>});	
		  	    $('#divMostra2').hide();
			    $('#divMostra3').show();
		  	    $('#mostra2').show(); 				
			  }	
			}
			function Stp2() {
			var erro = 'Selecione uma opção de envio';
			var op = $('input:radio[name=shipping_method]:checked').val();
			if (! $("input[type='radio'][name='shipping_method']").is(':checked') ){
			$(".6").html(''+erro);return false; } else {$(".6").html('')}
				$( '#checkout-step-shipping_method' ).hide();
				$( '#checkout-step-payment' ).show();
				$( ".l2" ).css( { display: "block"	} );
			}
			
			function Stp3() {
		        //alert ( 'entrou na acao' );
		    	var erro = 'Campo Obrigatório';
		    	var n = $("#nome").val();
		    	var c = $("#cpf").val();
		    	var cc = $("#celular").val();
		    	
		    	if ( n == ''){ $(".7").html(''+erro);return false; } else {$(".7").html('')}
		    	if ( c == ''){	$(".8").html(''+erro);return false;} else {$(".8").html('')}
		    	if ( cc == ''){	$(".9").html(''+erro);return false; } else {$(".9").html('')}
		    	
		    	if(n!='' && c!='' && cc!=''){ 			  
		    	  $("#divMostra2").animate({<?php echo $animation;?>});	
		      	  $('#divMostra1').hide();
		    	  $('#divMostra2').show();
		    	  $('#mostra1').show();
		    	}
		    }	
		
		    function Stp4() {
			  var erro = 'Campo Obrigatório';	 
            
		      var nc = $("#cartao_nome").val();
		      var cn = $("#numerocartao").val();
		      var cv = $("#cvv").val();
			  
			  var mtd = $('input:radio[name=p_method]:checked').val()
			  
              if ( mtd == 'Cartao' ){ console.log(nc);
                //alert ( 'entrou - cartao' );
              			if ( nc == ''){ $(".nc").html(''+erro);return false; } else {$(".nc").html('')}
              			if ( cn == ''){	$(".cn").html(''+erro);return false;} else {$(".cn").html('')}
              			if ( cv == ''){	$(".ncv").html(''+erro);return false; } else {$(".ncv").html('')}
              }
	
			   if (! $("input[type='radio'][name='p_method']").is(':checked') ){
			    $(".10").html(''+erro);return false; 
			  }else {
				$(".10").html('')
			  }
			  
			  if((nc != '' && cn != '' && cv != '') || mtd == 'Boleto'){			      
			    $("#divMostra4").animate({<?php echo $animation;?>});	
		  	    $('#divMostra3').hide();
			    $('#divMostra4').show();
		  	    $('#mostra3').show();
		  	    $('#mostra4').show();	  
			  }
			  
				//$( '#checkout-step-payment' ).hide();
				//$( '#checkout-step-revisao' ).show();
				//$( ".l3" ).css( { display: "block"	} );
			}
			
			function Boleto() {
				$( '#Cartao' ).hide();
				$( '#Boleto' ).show();
			}
			function Cartao() {
				$( '#Boleto' ).hide();
				$( '#Cartao' ).show();
			}
		</script>
</body>
</html>