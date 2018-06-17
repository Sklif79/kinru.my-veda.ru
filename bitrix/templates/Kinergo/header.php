﻿<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();
$page = $APPLICATION->GetCurPage();?>
<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
       <?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<base href="https://kinergo.ru/">
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png" />
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Russo+One&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
	<link rel='stylesheet' type='text/css' href='https://kinergo.eu/bitrix/templates/Kinergo/css/style.css' />
	<link rel='stylesheet' type='text/css' href='https://kinergo.eu/bitrix/templates/Kinergo/css/luiwadjogs.css' />

	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/popup.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/jquery.bxslider.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/lightbox.css' />
	<link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/jquery.custom-scrollbar.css' />
	 <link rel='stylesheet' type='text/css' href='<?=SITE_TEMPLATE_PATH?>/css/adaptive.css' />

	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.popupoverlay.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.min.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/initialization.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.min.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.form.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mousewheel.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.custom-scrollbar.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js" type="text/javascript"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46335635-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<script>
$(document).ready(function(){
	$('#removepasvord_form').submit(function(){
	var eml33=$('#removepasvord_email').val();
var d='USER_MAIL='+eml33+'&CONTROL1=1';
		if(eml33.length>5){
			$.ajax({
  type: "POST",
	url: "/form/removepasvord.php",
  data: d,
  success: function(msg){
    $('#valid_removepasvord').html(msg);
  }
});
$('#removepasvord_email').removeClass('error');
		}else{
			$('#removepasvord_email').addClass('error');
		}
 	 return false;
	});
});
</script>
<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"form",
	Array(
		"REGISTER_URL" => "",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"SHOW_ERRORS" => "N"
	)
);?>
<div id='register'  style="display:none;">
		<span class='header'>Регистрация</span>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.registration",
	"reg_form",
	Array(
	)
);?>
		<div class='register_close'></div>
	</div>

<style type="text/css">
.error{
  color: rgb(250, 153, 161);
margin-bottom: 10px;
display: block;
font-weight: 700;
font-size: 12px;
}
</style>

	<div id='removepasvord'  >
<a href='#' style='display:none'  id='removepasvord_open_1'  class='removepasvord_open' >removepasvord_open</a>
<span id='valid_removepasvord' class='header' style="font-size: 15px;">Если вы забыли пароль, введите E-Mail. Ссылка на смену пароля будет выслана вам по E-Mail</span>
		<form  method="post"  id='removepasvord_form' action="/form/removepasvord.php" >
		<input type='hidden' name='CONTROL1'  value='1'>
		<input type="mail"  id='removepasvord_email' name="USER_MAIL" class="input-text" maxlength="50" size="17" placeholder="Email">
		<br>
		<div class="center"><input type="submit" class="button" value="Отправить"></div>
	</form>
<div id="removepasvord_closes" class="removepasvord_close"></div>
</div>



	<div id='main'>
		<div id='head'>
			<div class='content'>
				<div itemprop='publisher' itemscope itemtype='https://schema.org/Organization'>
        <div class='logo' itemprop='image' itemscope itemtype='https://schema.org/ImageObject'>
            <a href='/'><img alt='Логотип компании Kinergo' itemprop='url image' url='' src='<?=SITE_TEMPLATE_PATH?>/img/kinergo-logo.png'/></a>
            <meta itemprop='width' content='219'>
            <meta itemprop='height' content='56'>
        </div>
        <meta itemprop='telephone' content='+375 17 200-60-92'>
        <meta itemprop='address' content='Россия'>
        <meta itemprop='name' content='Kinergo'>
  <link itemprop="url" href="https://kinergo.ru">
  <a itemprop="sameAs" href="https://www.facebook.com/kinergo.equipment"></a>
  <a itemprop="sameAs" href="https://www.youtube.com/channel/UCB3eSASP7xa4LTy1-qITKJQ"></a>
    </div>
				<div class='info'>
					<div class='contacts'>
<div id="language">
   <p>Выберите язык</p>
   <ul class="language">
      <li class="active"><a href="javascript: void 0;"><span>RU</span><img src="https://kinergo.eu/upload/uf/c19/c19b57dd602c3bfc2fe5a654c9fcc7e2.png" border="0" alt="европейская версия сайта"></a></li>
	   <li><a href="https://kinergo.eu"><span>EN</span><img src="https://kinergo.eu/upload/uf/903/903e6e4d8109db56c92dfae84f686321.png" border="0" alt="английская версия сайта" ></a></li>
      <li><a href="https://kinergo.es"><span>ES</span><img src="https://kinergo.eu/upload/uf/ab1/ab1704b36cb40b2b6aac991412fc0f63.png" border="0" alt="испанская версия сайта" ></a></li>
      <li><a href="https://kinergo.ae"><span>AE</span><img src="https://kinergo.eu/upload/uf/cb8/cb828df5782575965e05d97be91fc5f5.png" border="0" alt="версия сайта для Израиля"></a></li>
	  <li><a href="http://fr.kinergo.eu"><span>FR</span><img src="https://kinergo.eu/upload/uf/e2f/e2fc8e12a18ef4123f5d8d5be26c7c65.png" border="0" alt="французская версия сайта"></a></li>
   </ul>
</div>

<div id='linkJS'>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"form_linck",
	Array(
		"REGISTER_URL" => "",
		"FORGOT_PASSWORD_URL" => "",
		"PROFILE_URL" => "",
		"SHOW_ERRORS" => "N"
	)
);?>
</div>
					</div>



<?/*
<ul class='language'>
						<li class='active'><a href='javascript: void 0;'>RU</a></li>
					<li ><a href='http://kinergo.eu/'>EN</a></li>
					<li ><a href='http://kinergo.es/'>ES</a></li>
					<li ><a href='http://kinergo.ae/'>AE</a></li>
					</ul>
*/?>
				</div>
				
				
				 <div class="mobile_navbar">

                    <form class='search' method='GET' action="https://<?=$_SERVER['HTTP_HOST']?>/sreach.php" >
                        <input type='text' name='q'  class='input-text' required placeholder='Поиск по сайту' />
                        <input type='submit' class='btn-submit' value='' />
                    </form>

                    <div class="mobile-btn">
                        <button type="button" class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <span>Меню</span>
                    </div>
                </div>


					<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu_head",
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "top_c",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
				</div>
			</div>
		</div>


