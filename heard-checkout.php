<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" class="wide wow-animation" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title><?php echo $titlepage; ?></title>
    <meta name="format-detection" content="telephone=no">
	<meta content="<?php echo isset($descricao)?$descricao:""; ?>" name="description">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <!--meta charset="utf-8"-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic%7CRoboto:400,300,100,700,300italic,400italic,700italic%7CMontserrat:400,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Marck+Script" />
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
	  <?php 
	   
	   $isiPad = (bool) strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'ipad');
$isiPhone = (bool) strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'iphone');
$isAndroid = (bool) strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'android');
 
//Forma de aplicação
if($isiPad ){
      echo ' <link rel="stylesheet" href="css/ipad.css">';
}else{echo ' <link rel="stylesheet" href="css/style2.css">';}?>



   
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
		<style type="text/css">
		  .barra_rosa{ 
        padding: 13px 0px;
        border-bottom-color: black;
        border-bottom-width: 4px; 
      }
          .logoCart{
              width: 300px; 
          }
        @media (max-width: 780px){
          .barra_rosa{
            height: 120px;
          }
        }
		</style>
  </head>
  <body>
  <!--div id="preloader">
    <div id="status">&nbsp;</div>
</div-->
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1561708304041839";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
	</script>
	<script type="text/javascript">
      function Men_1(){
      $( ".men_2, .men_3, .men_8" ).hide( 500 );
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
      function Men_8(){
      $( ".men_2, .men_3, .men_1" ).hide( 500 );
      $( ".men_8" ).toggle( 500 );
      
      }
    </script>	
    </script>	
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-header">
	    <div class="col-lg-12 col-md-12 col-sm-12 b_top barra_rosa topocheckout" style="display: block;">
		   <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 logoCart">           
              <div class="rd-navbar-brand"><a href="./" class="brand-name"><img alt="" style="float: left; margin-left: 15px;" src="images/logo.png" ></a></div>
           </div>

        <div class="fones col-md-6" style="text-align: left; font-size: 16px; padding-right: 10%;float: right;">
          <div class="col um" style="float: right;">
            <strong style="text-align: left !important;">SAC</strong>
            <p>(11) 4000-1133</p>
            <small>SÃO PAULO CAPITAL</small>
          </div>
        </div>

        </div>
		<div class="clearfix"></div>

</header>