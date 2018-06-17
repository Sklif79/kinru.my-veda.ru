<? if ($_POST['L_USER_LOGIN']) {
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/classes/general/captcha.php");

if (!$APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_code"])) {
	// Неправильное значение
	echo "<span class='header'>Регистрация</span>";
	echo "<span style='
color: rgb(247, 182, 182);
font-size: 16px;
margin-bottom: 10px;
display: block;
'>NO CATCHA</span>";
        include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/template.php");
    } else {
		if(isset($_POST['L_USER_LOGIN']) && isset($_POST['L_USER_CODE']) && isset($_POST['L_USER_PHONE']) && isset($_POST['L_USER_PASSWORD']) && isset($_POST['L_USER_CONFIRM_PASSWORD']) && isset($_POST['L_USER_LAST_NAME']) && isset($_POST['L_USER_EMAIL'])){
			if($_POST['L_USER_LOGIN']!='' && $_POST['L_USER_CODE']!='' && $_POST['L_USER_PHONE']!='' && $_POST['L_USER_PASSWORD']!='' && $_POST['L_USER_CONFIRM_PASSWORD']!='' && $_POST['L_USER_LAST_NAME']!='' && $_POST['L_USER_EMAIL']!=''){
			//регистрация пользователя
			global $USER;
			$arResult = $USER->Register($_POST['L_USER_LOGIN'], $_POST['L_USER_NAME'], "", $_POST['L_USER_PASSWORD'], $_POST['L_USER_CONFIRM_PASSWORD'], $_POST['L_USER_EMAIL']);
			$ID = $arResult['ID'];
			if ($ID > 0) {
				$user = new CUser;
				$fields = Array(
					"PERSONAL_PHONE" => '+ '.$_POST['L_USER_CODE'].' '.$_POST['L_USER_PHONE'],
				);
				$user->Update($ID, $fields);
			}
			?>
			<br>
			<? if ($arResult['TYPE'] == 'OK') {
				$arEventFields = array(
					"USER_EMAIL" => $_POST['L_USER_EMAIL'],
					'USER_LOGIN' => $_POST['L_USER_LOGIN'],
					'USER_PASSWORD' => $_POST['L_USER_PASSWORD'],
				);
				CEvent::SendImmediate("USER_CONGRATULATION", array('s1'), $arEventFields);
				?>
				<span class='header'>Вы успешно зарегистрированы и авторизованы на сайте!</span>
			<?
			}
		}
	}

    }
} ?>