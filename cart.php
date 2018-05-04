<?php
$titlepage = "Carrinho | Anitta Store - Produtos de qualidade e com garantia.";
//include 'heard.php';
include 'heard-checkout.php';
?>


    <link rel="stylesheet" href="./carrinho_files/bootstrap.min.css">
    <link rel="stylesheet" href="./carrinho_files/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="./carrinho_files/font-awesome.min.css">
    <link rel="stylesheet" href="./carrinho_files/vtex-message.min.css">
    <link rel="stylesheet" href="./carrinho_files/style.css">
    <link href="./carrinho_files/checkout-custom.css" rel="stylesheet" type="text/css">
    <link href="./carrinho_files/checkout5-custom.css" rel="stylesheet" type="text/css" id="checkout-custom-css">


    <style type="text/css">
        #rel_prod > div {
            border: none !important;
            margin-top: 5px;
        }
        #rel_prod {
        margin-bottom: 35px;
        border: 3px solid #f4f4f4 !important;
        padding: 0px 10px !important;
        }
    </style>

<div class="cart">
<div class="row">
   <div class="shell">
          <div>

          <h3 style=" font-weight: 400; margin-top: 20px; margin-bottom: 10px;">Meus Produtos</h3>

          </div>
          
          
        </div>
        </div>
        <div class="row container2">
         <div id="boat"  style="">
       
       </div> 
       </div>
      <!-- Page Content-->
            <main class="page-content">
        
          
        
        <div class="shell">
          
<div id="rel_prod" style="padding: 0px 20px;">
<div class="cell-md-12 cell-xs-12 box_titulo_produto" id="m_cart">
    <div class="shell" id="m_cart2">
        <div class="range"> 
            <div class="cell-md-5 cell-xs-12 txt_center_bold" style="text-align: left;"> Produto </div>
            <div class="cell-md-2 cell-xs-12 txt_center_bold"> Preço</div>
            <div class="cell-md-2 cell-xs-12 txt_center_bold"> Quantidade </div>
            <div class="cell-md-2 cell-xs-12 txt_center_bold"> Total </div>
        </div>
    </div>
</div>
<div class="cell-md-12 cell-xs-12 border_bottom">
<!--div class="shell pull-sm-left reveal-xs-flex"-->
<div class="range">
<div class="col-sm-5  col-md-5 col-xs-12">
    <!--div class="shell"-->
        <div class="range">

            <div class="col-sm-2  col-md-2 col-xs-2"><img style="margin-top: 20px;" src="images/product-01-original.jpg" class="img-responsive"></div>
            <div class="col-sm-5  col-md-8 col-xs-10 tek">
                <div class="text-left">
                    <a href="#" style="color: #08c; font-size: 14px;">Nome do produto adquirido</a>
                </div>
                <div class="text-left">
                    <p style=" font-size: 12px;">Descrição do produto adquirido</p>
                </div>
				 <div class="text-left">
                    <small style="color: #bbb; font-weight: bold;"><b>Tamanho: </b>GRANDE | MÉDIO | PEQUENO</small>  
                </div>
            </div>

            
        </div>
    <!--/div-->
</div>
<div class="cell-md-2 cell-sm-2 cell-xs-6 text-center" style="margin-top: 25px;float:right;">
R$ <span class="font_rosa2"> 00,00</span>
</div>
<div class="cell-md-2 cell-sm-2 cell-xs-6 text-center" style="margin-top: 5px; width: 110px; float: left;">

<div class="stepper "><input type="number" style="margin-top:12px;" data-zeros="true" value="1" min="1" max="10" class="form-control form-control-impressed stepper-input"><span class="stepper-arrow up"></span><span class="stepper-arrow down"></span></div>

</div>
<div class="cell-md-2 cell-sm-3 cell-xs-12  text-center" style="margin-top: 20px;">
R$ <span class="font_rosa2"> 00,00</span>
</div>

 <div class="col-sm-1  col-md-1" style="margin-top: 20px; padding: 0px;" id="dlx"><a href="#" class="icon icon-xs text-primary mdi mdi-close"></a></div>
</div>
<!--/div-->
</div>
</div>
<div id="rel_prod2" style="display:none;">
<!-- Bloco Produtos Celular -->
<div class="col-sm-12  col-md-12 col-xs-12 border_bottom_p2">
<div class="col-sm-1  col-xs-1" style="padding:30px 0 0 0">
<a href="#" class="icon icon-xs text-primary mdi mdi-close"></a>
    </div>
<div class="col-sm-4  col-xs-4" style="padding-right:0px">
<img src="images/product-01-original.jpg" class="img-responsiveboat">
</div>
<div class="col-sm-7  col-xs-7" style="font-size:11px">
<div class="col-sm-12  col-md-12 col-xs-12 text-left" style="padding:0px">
Nome do produto adquirido
</div>
<div class="col-sm-12 col-xs-12 text-left" style="padding:0px">
<b>Tamanho:</b> 000
</div>
<div class="col-sm-7  col-xs-7  text-left" style="padding:0px">
<input type="number" data-zeros="true" value="1" min="1" max="10" class=""  style="width:100px; padding: 3px 5px; height: 30px;">
</div>
<div class="col-sm-12  col-xs-12 text-right" style="padding:0px; font-weight: bold; font-size: 13px;">
R$ 00,00
</div>

</div>
</div>
<!-- BlocoFechamento Celular -->
</div>
<div style="clear:both"></div>



<div class="offset-top-30 col-md-9">
    <div class="pull-sm-right form-wid offset-sm-top-0" id="cupom">
        <form data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" action="" class="rd-mailform">
            <div class="form-inline-flex reveal-xs-flex form-cart" >
                <div class="form-group offset-bottom-0" id="edtCupom" style="display: none;">
                    <input type="text" name="coupon" placeholder="Cupom de Desconto" id="coupon" maxlength="20" class="form-control"  data-constraints="@NotEmpty">
                </div>
                <button class="btn btn-rosa offset-xs-left-10 offset-top-10 offset-xs-top-0" id="btnCupom" style="display: none;">Aplicar Cupom</button>
                <button class="btn btn-rosa offset-xs-left-10 offset-top-10 offset-xs-top-0" id="newCupom">Adicionar Cupom</button>
            </div>
        </form>
    </div>
</div>

    




<div class="col-sm-12 col-md-3">
    <div class="" >
        <h2 class="text-center text-light" style="font-size:24px; margin-top:30px;">Total da Compra</h2>
        <div class="range-middle reveal-flex range-justify ">
            <p class="text-spacing-40 text-light offset-bottom-0">Subtotal:</p>
            <p class="text-regular cart_totals-price">R$ 000,00</p>
        </div>
        <div class="range-middle reveal-flex range-justify ">
            <p class="text-spacing-40 text-light offset-bottom-0">Desconto:</p>
            <p class="text-regular cart_totals-price">R$ 000,00</p>
        </div>
        <div class="range-middle reveal-flex range-justify " id="totalFrete">
<!-- CEP-->
            <?php if(!isset($_POST['cep'])){?>

                <form data-result-class="rd-mailform-validate" data-form-type="Subscribe" method="post" action="cart.php" >
                    <div class="form-inline-flex reveal-xs-flex">
                        <div class="form-group offset-bottom-0 ">
                            <input type="text" name="cep" placeholder="CEP" id="cep" maxlength="20" class="form-control"  data-constraints="@NotEmpty" style="width:108px;">
                        </div>
                    
                        <button type="submit" class="btn btn-rosa offset-xs-left-10">CALCULAR FRETE</button>
                        <div class="col-md-8 col-sm-12  col-xs-12 text-right n_cep" style="font-weight: bold; padding-top: 40px;">
                            <br>
                        </div>
                    </div>
                        <i><a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCep.cfm" target="new">Não sei meu CEP</a></i>

                </form>
                
            <?php }else{?>
            
            <div id="ceps" style=" "><b><?php echo $_POST['cep'];?></b> 
            <br>
            <a class="font_rosa2" style="cursor: pointer;"><b> Alterar CEP</b></a>
            
            <div id="dentrocep" style=""></div>
            <br />
            <div id="vercep" style=" ">
            <input type="radio" id="radioRapida"> <i id="textRadio1">Rápida | Até 10 dias: R$ 19,90</i><br>
            <br>
            <input type="radio" id="radioEconomica"> <i id="textRadio2">econômica | Até 14 dias: Grátis</i><br>
            <br>
            <input type="radio" id="radioE-sedex"> <i id="textRadio3">E-sedex | Até 4 dias: Grátis</i>
            </div>
            </div>
            <?php }?>


      
        </div>
        <div class="range-middle reveal-flex range-justify" style="display: none !important;" id="finalFrete1">
            <p class="text-spacing-40 text-light offset-bottom-0">Entrega para *****-***<br>Até 10 dias úteis</p>
            <p class="text-regular cart_totals-price">R$ 19,90</p>
        </div>
        <div class="range-middle reveal-flex range-justify" style="display: none !important;" id="finalFrete2">
            <p class="text-spacing-40 text-light offset-bottom-0">Entrega para *****-***<br>Até 14 dias úteis</p>
            <p class="text-regular cart_totals-price">GRÁTIS</p>
        </div>
        <div class="range-middle reveal-flex range-justify" style="display: none !important;" id="finalFrete3">
            <p class="text-spacing-40 text-light offset-bottom-0">Entrega para *****-***<br>Até 4 dias úteis</p>
            <p class="text-regular cart_totals-price">GRÁTIS</p>
        </div>
        <div class="range-middle reveal-flex range-justify">
            <p class="text-spacing-40 text-light offset-bottom-0">Total:</p>
            <p class="text-regular cart_totals-price">R$ 000,00</p>
        </div>
    </div>
</div>
    







    <div class="row">
       <div id="boat" style=" float:right; position:relative; width:100%; height:110px; ">
       
       <div id="lugars">
        <div class="larg">
            <a href="index.html"><button type="submit" class="btn btn-rosa offset-xs-left-10 offset-top-10 offset-xs-top-0 "><span class="fa fa-chevron-left"></span> ESCOLHER MAIS ITENS</button></a>
            <a href="finalizar_pedido.html" class="pull-sm-rigth btn btn-success">FINALIZAR COMPRA</a>
           
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
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $("#cep").mask("99999-999");
        $("#newCupom").click(function(){
            $("#edtCupom").show(400);
            $("#btnCupom").show(400);
            $("#newCupom").hide();
                });
    });

     $(function(){
        $("#radioRapida").click(function(){
            $("#finalFrete1").show();
            $("#ceps").hide();
        });
        $("#radioEconomica").click(function(){
            $("#finalFrete2").show();
            $("#ceps").hide();
        });
        $("#radioE-sedex").click(function(){
            $("#ceps").hide();
            $("#finalFrete3").show();
        });
             });
//<![CDATA[
$(window).on('load', function() { // makes sure the whole site is loaded 
$('#status').fadeOut(); // will first fade out the loading animation 
$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
$('body').delay(350).css({'overflow':'visible'});
});  
//]]>
</script>