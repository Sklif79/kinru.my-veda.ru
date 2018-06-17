<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id='login'  style="display:none;">
		<span id='valid_login' class='header'>Авторизация</span>
<?if($arResult["FORM_TYPE"] == "login"):?>
<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top"  id="FormAuthL"  action="https://<?=$_SERVER['HTTP_HOST']?>/bitrix/templates/Kinergo/components/bitrix/system.auth.form/form/ajax.php">
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	<input type="text" id="USER_LOGIN" name="USER_LOGIN" maxlength="50" class='input-text'  placeholder='Логин' value="<?=$arResult["USER_LOGIN"]?>" size="17" />
	<input type="password" id="USER_PASSWORD" name="USER_PASSWORD" class='input-text' maxlength="50" size="17" placeholder='Пароль'  />
			<div class='center'><input type='submit' class='button' value='Войти' /></div>
			<p onclick='reg_form()'  style='text-decoration: underline;' class=registr>Регистрация</p>
			<p onclick='removepas_form()'  style='text-decoration: underline;margin-left: 30px;' class="registr">Забыли пароль?</p>
		</form>
	<div id='login_closes' class='login_close'></div>

<style>
	.registr{
		display:inline-block;
cursor: pointer;
margin-top: 25px;
color: white;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	var options = {
		timeout: 3000 ,// тайм-аут
		 success : function(response) {
		 	$("#valid_login").html(response);
		 	var err=$("#errL2").attr('err');
		 	if(err=='N'){
		 		 $.ajax({
						type : "POST",
						url : "https://<?=$_SERVER['HTTP_HOST'];?>/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/form.php",
						data : "&LUI=Y",
						success : function(response) {$("#linkJS").html(response);}
					});
		 		setTimeout(function() { $('.login_close').trigger('click'); }, 1500);
		 		var pol=$('#URAD').attr('URAD');
		 		if(pol==1){urad1();};
		 		if(pol==2){urad2();};
		 		if(pol==3){urad3();};
		 		}	
		}
	}
	$("#FormAuthL").validate({
	     submitHandler: function(form) {
	     $(form).ajaxSubmit(options);
	    },
	     rules:{
	     	USER_LOGIN:{
	     		required: true,
                minlength: 4,
                maxlength: 16,
            },
            USER_PASSWORD:{
	     		required: true,
                minlength: 6,
                maxlength: 25,
            },  
	     },
	      messages:{
	      	USER_LOGIN:{
	     		required: "Это поле обязательно для заполнения",
                minlength: "Логин должен быть минимум 4 символов",
                maxlength: "Максимальное число символов - 16",
            },
            USER_PASSWORD:{
	     		required: "Это поле обязательно для заполнения",
                minlength: "Пароль должен быть минимум 6 символов",
                maxlength: "Максимальное число символов - 25",
            },  
	      }

	 });

});
  
	
	function reg_form(){
		$('#login_closes').trigger('click');
		$('#reg_open').trigger('click');
}
function removepas_form(){
		$('#login_closes').trigger('click');
		$('#removepasvord_open_1').trigger('click');
}
</script>

<?endif?>
</div>