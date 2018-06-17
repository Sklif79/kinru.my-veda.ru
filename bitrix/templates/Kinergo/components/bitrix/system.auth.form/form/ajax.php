<?
if($_POST['USER_PASSWORD']){
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 	
global $USER;
$arAuthResult = $USER->Login($_POST['USER_LOGIN'],$_POST['USER_PASSWORD'], "Y","Y");
	if($arAuthResult==1){
	echo "Вы успешно авторизованы";
	echo "<input id='errL2' type='hidden' err='N'>";
	}else{
	ShowMessage($arAuthResult);
	}
}
?>



