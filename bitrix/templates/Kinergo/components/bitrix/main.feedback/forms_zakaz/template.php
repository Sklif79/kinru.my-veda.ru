<?
//if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

global $USER;

if($_POST['bf_emal']){ 
session_start();
?>
<h3>Заказ оформлен!<br/>Наши сотруднии свяжутся с Вами в ближайшее время.</h3>
<a href='/' class='btn-home'>На главную</a>
<?
unset($_SESSION['LU']);
unset($_SESSION['LUAKOL']);
}else{
	$rsUser = CUser::GetByLogin("admin");
$arUser = $rsUser->Fetch();
//echo "<pre>"; print_r($arUser); echo "</pre>";
?>
<form id='bf_form' class="contact-form" action="https://<?=$_SERVER['HTTP_HOST']?>/bitrix/templates/Kinergo/components/bitrix/main.feedback/forms_zakaz/template.php" method="post">
					<div class="leftb">
						<div>
 <span class="label">Email:*</span><input id="bf_emal" value="<? echo $USER->GetEmail() ; ?>" name="bf_emal"  type="text" class="input-text">
						</div>
						<div>
 <span class="label">Телефон:*</span><input id="bf_phone" name="bf_phone" type="text" class="input-text">
						</div>
						<div>
 <span class="label">ФИО:*</span><input id="bf_fio" value='<? echo "{$USER->GetFirstName()} {$USER->GetLastName()}"; ?>' name="bf_fio" type="text" class="input-text">
						</div>
						<div>
 <span class="label">Организация:</span><input id="bf_orgn" name="bf_orgn" type="text" class="input-text">
						</div>
						<div>
 <span class="label">Должность:</span><input id="bf_dlz" name="bf_dlz" type="text" class="input-text">
						</div>
					</div>
				<div class="rightb">
					 <span class="label">Адрес доставки:</span>
					 <textarea id="bf_adrs" name="bf_adrs" class="input-big"></textarea> 
					 <span class="label">Комментарий:</span>
					 <textarea id="bf_coment" name="bf_coment" class="input-big"></textarea>
					 <input type="submit" class="btn-submit" value="Оформить заказ">
				</div>
			</form>
			<div id='test666'></div>
			<style>
			.error{
				display: inline-block;
				color:red;
			}
			</style>
<script>
$(document).ready(function(){	
	var options_form = {
			timeout: 3000 ,// тайм-аут
			success : function(response) {
			$(".details").html(response);
			}
		}

		$("#bf_form").validate({

	     submitHandler: function(form) {
	     $(form).ajaxSubmit(options_form);
	    },

	     rules:{
	     	bf_emal:{
	     		required: true,
                email: true,
            },
            bf_phone:{
	     		required: true,
                minlength: 7,
                maxlength: 30,
            }, 
            bf_fio:{
	     		required: true,
                minlength: 6,
            },
             bf_orgn:{
	     		
            }, 
             bf_dlz:{
	     		required: false,
            }, 
             bf_adrs:{
	     		required: false,
            }, 
             bf_bf_coment:{
	     		required: false,
            }, 
	     },
	      messages:{
	      	bf_emal:{
	     		required: "Это поле обязательно для заполнения",
                 email: "Введите правильный email",
            },
          bf_phone:{
	     		required: "Это поле обязательно для заполнения",
	     		minlength: "Минимальное каличиство символов 7",
            }, 
         bf_fio:{
	     		required:"Это поле обязательно для заполнения",
                minlength: "Минимальное каличиство символов 6",
            }, 
	      }

	 });

});
</script>
<?}?>
