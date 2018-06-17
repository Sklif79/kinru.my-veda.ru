<?
if($_POST['LUI']=='Y'){
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
global $USER;
?>
<span class='enter'><? echo $USER->GetLogin();?></span><span class='register'><a href='?logout=yes' >Выйти</a></span>
<div class='register_close'></div>
<?}?>
