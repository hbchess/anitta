<?php
$titlepage = "Busca - Produtos de qualidade e com garantia.";
require ( 'heard.php' );
?>
  
  <!-- Page Content-->
  <main class="page-content">
    <div class="shell">
      <div>
        <ol class="breadcrumb">
          <li><a href="./" class="icon icon-sm fa-home text-primary"></a></li>
          <li><a href="products.html">Produtos</a></li>
          <li class="active"><font class="breadcrumb_pagina">Nome da Sub-categoria</font>
          </li>
        </ol>
      </div>
    </div>
    
    <div class="shell">
    <div class="range">
        <div class="cell-md-12 text-left page-title">
          <form method="post" action="#">
            <div class="range">
            <div class="col-xs-12 col-sm-12 col-md-4">
              <div class="label-search" style="padding-bottom: 15px"><h1 class="tituloBusca">O que você procura?</h1>
              </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-4">
                <select name="" class="form-select-1">
                    <option value="">Categoria 1</option>
                    <option value="">Categoria 2</option>
                </select>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-4">
                <select name="" class="form-select-1">
                    <option value="">Subcategoria 1</option>
                    <option value="">Subcategoria 2</option>
                </select>
              </div>
              
            </div>
            <div class="clearfix"></div>
          </form>

        </div>    
        <div class="col-md-12" id="filter-box" style="display: none;">
            <ul style="padding-bottom: 20px;">
              <li class="pull-left" style="margin-right: 20px;">
                <a href="" style="color: #d68fb8;"> <span class=" fa-circle" aria-hidden="true" style="font-size: 7px; position: relative;top: -3px; padding-right: 5px"></span>
                    Filtro 1
                </a>
              </li>
              <li class="pull-left" style="margin-right: 20px;">
                <a href="" style="color: #d68fb8;"> <span class=" fa-circle" aria-hidden="true" style="font-size: 7px; position: relative;top: -3px; padding-right: 5px"></span>
                    Filtro 2
                </a>
              </li>
              <li class="pull-left" style="margin-right: 20px;">
                <a href="" style="color: #d68fb8;"> <span class=" fa-circle" aria-hidden="true" style="font-size: 7px; position: relative;top: -3px; padding-right: 5px"></span>
                    Filtro 3
                </a>
              </li>
              <li class="pull-left" style="margin-right: 20px;">
                <a href="" style="color: #d68fb8;"> <span class=" fa-circle" aria-hidden="true" style="font-size: 7px; position: relative;top: -3px; padding-right: 5px"></span>
                    Filtro 4
                </a>
              </li>
              <li class="pull-left" style="margin-right: 20px;">
                <a href="" style="color: #d68fb8;"> <span class=" fa-circle" aria-hidden="true" style="font-size: 7px; position: relative; top: -3px; padding-right: 5px"></span>
                    Filtro 5
                </a>
              </li>
              <li style="clear: both;"></li>
            </ul>
          </div>
          <div style="clear: both;"></div>
          <script type="text/javascript">
            function showFilters() {
              $("#filter-box").show();
            }
            function openMobileFilters()
            {
          	  $( "#categoriaFiltro").toggle( "slide" );
			  
			   if(document.getElementById("abaBtFechaFiltro").style.display == "none" || document.getElementById("abaBtFechaFiltro").style.display == ""){          	     
				 setTimeout(function(){ $( "#abaBtFechaFiltro").css('display','block'); }, 400);
			  }else{
          	    $( "#abaBtFechaFiltro").css('display','none');
			  }	
            }
			
	function Men_1(){
		$("#armored_websiteMobile").html($("#armored_website").html());
		$("#divSeloEbitMobile").html($("#divSeloEbit").html());
		$( ".men_2, .men_3, .men_4" ).hide( 500 );
		$( ".men_1" ).toggle( 500 );
	}
	function Men_2(){
		$( ".men_1, .men_3, .men_4" ).hide( 500 );
		$( ".men_2" ).toggle( 500 );
	}
	function Men_3(){
		$( ".men_1, .men_2, .men_4" ).hide( 500 );
		$( ".men_3" ).toggle( 500 );
	}
	function Men_4(){
		$( ".men_1, .men_2, .men_3" ).hide( 500 );
		$( ".men_4" ).toggle( 500 );
	}
    function facebookLogin(e){
		jQuery('span.errors').html('');
		e.preventDefault();
		FB.login(function(response){
			if (response.status === 'connected') {			      
		      FB.api('/me', 'get', {access_token: response.authResponse.accessToken, fields: 'id,name,email,gender'}, function(me) {
		    	  jQuery.post('/login-fb/connect', {'accessToken' : response.authResponse.accessToken, 'facebookId': me.id, 'name' : me.name, 'email' : me.email, 'gender' : me.gender, 'redirectUrl' : jQuery('input[name="redirectUrl"]').val()}, function(login){
		       		if(login.status == "OK"){
		       			window.location.href = login.url;
		       		}else{
		       			$('span.errors').html(login.errors);	
		       		}			       			
		          });
		      });
		    } else if (response.status === 'not_authorized') {
		    	jQuery('span.errors').html('É necessário autorizar no facebook para conectar via facebook connect.');
		    } else {
		    	jQuery('span.errors').html('É necessário conectar no facebook para acessar');
		    }
		}, {scope: 'public_profile,email'});
	}
</script><script type="text/javascript">
	(function () {
		var yvs = document.createElement("script");
		yvs.type = "text/javascript";
		yvs.async = true;
		yvs.id = "_yvsrc";
		yvs.src = "//service.yourviews.com.br/script/9a2db4c7-d10c-47ae-a23a-8a58aa7c9f7c/yvapi.js";
		var yvs_script = document.getElementsByTagName("script")[0];
		yvs_script.parentNode.insertBefore(yvs, yvs_script);
	})();
</script><script type="text/javascript">
$('#select-order-search').change( function() {
	var order = this.value;
	$('#order').val(order);
	$('#formHeaderSearch').submit();
});
$('#select-category-search').change( function() {
	resetFilters();
	$('#categorySearchId').val($('#select-category-search').val());
	$('#formHeaderSearch').submit();
});
$('#select-bath-search').change( function() {
	resetFilters();
	$('#bathSearchId').val($('#select-bath-search').val());
	$('#formHeaderSearch').submit();
});

function setCatetoryFilter(idCatFilter) {
	$('#categorySearchId').val(idCatFilter);
	$('#formHeaderSearch').submit();
}

function resetCatetoryFilter() {
	$('#categorySearchId').val('');
	$('#formHeaderSearch').submit();
}

function setBathFilter(idBathFilter) {
	$('#bathSearchId').val(idBathFilter);
	$('#formHeaderSearch').submit();
}

function resetBathFilter() {
	$('#bathSearchId').val('');
	$('#formHeaderSearch').submit();
}

function setColorFilter(idColorFilter) {
	$('#colorSearchId').val(idColorFilter);
	$('#formHeaderSearch').submit();
}

function resetColorFilter() {
	$('#colorSearchId').val('');
	$('#formHeaderSearch').submit();
}

function setMaterialFilter(idMaterialFilter) {
	$('#materialSearchId').val(idMaterialFilter);
	$('#formHeaderSearch').submit();
}

function resetMaterialFilter() {
	$('#materialSearchId').val('');
	$('#formHeaderSearch').submit();
}

function setSizeFilter(idSizeFilter) {
	$('#sizeSearchId').val(idSizeFilter);
	$('#formHeaderSearch').submit();
}

function resetSizeFilter() {
	$('#sizeSearchId').val('');
	$('#formHeaderSearch').submit();
}

function setPriceFilter(idPriceFilter) {
	$('#priceSearchId').val(idPriceFilter);
	$('#formHeaderSearch').submit();
}

function resetPriceFilter() {
	$('#priceSearchId').val('');
	$('#formHeaderSearch').submit();
}

function showMoreCatetoryFilter(idCatFilter) {
	$('.showmore').hide();
	$('.hidemore').show();
	$('.cat_' + idCatFilter).show();
}

function hideMoreCatetoryFilter(idCatFilter) {
	$('.hidemore').hide();
	$('.showmore').show();
	$('.cat_' + idCatFilter).hide();
}

function resetFilters() {
	$('#term').val('');
	$('#colorSearchId').val('');
	$('#materialSearchId').val('');
	$('#sizeSearchId').val('');
	$('#priceSearchId').val('');
}			
          </script>
        <div class="cell-sm-4 cell-md-3 text-left" style="margin-bottom: 30px;">
          <?php if (empty($_GET['filtro'])) {?>
		    <a href="javascript:openMobileFilters();" class="btFiltroMobile" id="btFiltroResultado"><i class="fa fa-filter" aria-hidden="true"></i></a>
            <br/>
			
		    <div class="abaBtFechaFiltro btFiltroMobile" id="abaBtFechaFiltro" style="z-index:12001; top:48px;"><a href="javascript:openMobileFilters();" id="btFechaFiltro" class="btFiltroMobile">X</a></div>
			<ul class="category-list" id="categoriaFiltro">
            <li>
              <p class="category-title">
                <a href="#" class="font_preta">Filtrar Resultado</a>
              </p>
              <ul>
                <li>
                  <a href="#">
                    <b style="font-size: 20px">Categoria</b>
                  </a>
                </li>
                <li><a href="#">Subcategoria 1</a></li>
                <li><a href="#">Subcategoria 2</a></li>
                <li><a href="#">Subcategoria 3</a></li>
                <li><a href="#">Subcategoria 4</a></li>
                <li class="cat_290" style="display:none;"><a href="#">Subcategoria 5</a></li>
                <li class="cat_290" style="display:none;"><a href="#">Subcategoria 6</a></li>
                <li class="cat_290" style="display:none;"><a href="#">Subcategoria 7</a></li>
                <li class="cat_290" style="display:none;"><a href="#">Subcategoria 8</a></li>
				<li class="showmore" style="display: list-item;"><button type="button" onclick="showMoreCatetoryFilter(290)" class="link linkcategoria linkfull icon icon-sm">Mostrar mais <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button></li>
				<li class="hidemore" style="display: none;"><button type="button" onclick="hideMoreCatetoryFilter(290)" class="link linkcategoria linkfull icon icon-sm">Mostrar menos <i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button></li>				
                
				<li>
                  <b style="font-size: 20px">Categoria</b>
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li><br>
                  <b style="font-size: 20px">Categoria</b>
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
              </ul>
            </li>
          </ul>
          <?php } ?>
          <?php if (!empty($_GET['filtro'])) {?>
		    <a href="javascript:openMobileFilters();" class="btFiltroMobile" id="btFiltroResultado">Filtrar Resultados &nbsp;&nbsp;<i class="fa fa-filter" aria-hidden="true"></i></a>
            <br/>
			<ul class="category-list" id="categoriaFiltro">
            <li>
              <p class="category-title">
                <a href="#" class="font_preta">Filtrar Resultado</a>
                <a href="javascript:openMobileFilters();" id="btFechaFiltro" class="btFiltroMobile">X</a>
              </p>
              <ul>
                <li>
                  <a href="#">
                    <b style="font-size: 20px">Categoria</b>
                  </a>
                </li>
                <li><a href="#">Subcategoria 1</a></li>
                <li><a href="#">Subcategoria 2</a></li>
                <li><a href="#">Subcategoria 3</a></li>
                <li><a href="#">Subcategoria 4</a></li>
                <li class="cat_290" style="display:none;"><a href="#">Subcategoria 5</a></li>
                <li class="cat_290" style="display:none;"><a href="#">Subcategoria 6</a></li>
                <li class="cat_290" style="display:none;"><a href="#">Subcategoria 7</a></li>
                <li class="cat_290" style="display:none;"><a href="#">Subcategoria 8</a></li>
				<li class="showmore" style="display: list-item;"><button type="button" onclick="showMoreCatetoryFilter(290)" class="link linkcategoria linkfull icon icon-sm">Mostrar mais <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></button></li>
				<li class="hidemore" style="display: none;"><button type="button" onclick="hideMoreCatetoryFilter(290)" class="link linkcategoria linkfull icon icon-sm">Mostrar menos <i class="fa fa-chevron-circle-up" aria-hidden="true"></i></button></li>				
                
				<li>
                  <b style="font-size: 20px">Categoria</b>
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li><br>
                  <b style="font-size: 20px">Categoria</b>
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
                <li>
                  <input type="checkbox" name=""> Tipo 
                </li>
              </ul>
            </li>
          </ul>			
		  
          <?php } ?>
        </div>
        <div class="cell-sm-8 cell-md-9">
            <div class="shell section-bottom-60">
      <div class="range">
        <div class="cell-md-12">
          <div class="range">
            <div class="cell-md-4 col-md-offset-8">
              <div class="form-group select-filter">
                <select data-placeholder="Selecione uma Opção" data-minimum-results-for-search="Infinity">
                  <option>Ordenar por:</option>                    
                  <option>Menor preço</option>
                  <option>Maior preço</option>
                  <option>Mais vendidos</option>
                  <option>Melhores avaliações</option>
                  <option>Melhor desconto</option>
                </select>
              </div>
            </div>
          </div>
          <div class="range offset-top-30">
          <!-- Product-->

          
      <!-- Loop-->
      <div class="cell-md-4 cell-xs-6"><a href="category.html" class="thumbnail-variant-1"><img alt="" src="images/index-08.jpg" width="270" height="363" class="img-responsive">
        <div class="caption">
          <h2 class="caption-title" style="font-size: 14px;">Anéis</h2>
          <p class="caption-descr">000 produtos</p>
        </div></a>
      </div>
      <div class="cell-md-4 cell-xs-6"><a href="category.html" class="thumbnail-variant-1"><img alt="" src="images/index-08.jpg" width="270" height="363" class="img-responsive">
        <div class="caption">
          <h2 class="caption-title" style="font-size: 14px;">Anéis</h2>
          <p class="caption-descr">000 produtos</p>
        </div></a>
      </div>
      <div class="cell-md-4 cell-xs-6"><a href="category.html" class="thumbnail-variant-1"><img alt="" src="images/index-08.jpg" width="270" height="363" class="img-responsive">
        <div class="caption">
          <h2 class="caption-title" style="font-size: 14px;">Anéis</h2>
          <p class="caption-descr">000 produtos</p>
        </div></a>
      </div>
     
      <!-- Fim -->

    </div>
     </div>
    </div>
    </div>
        </div>
    </div>
    </div>

  </main>
  <!-- Page Footer-->
  <?php require ( 'foot.php' ); ?>
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