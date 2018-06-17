<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?if($arResult["FORM_TYPE"] == "login"){?>
<span class='enter'><a href='#' class='login_open' onclick="yaCounter43283679.reachGoal('vojtivojti');">Войти</a></span>
<span class='register'><a href='#' id='reg_open' class='register_open' onclick="yaCounter43283679.reachGoal('registraciyaregistraciya');">Регистрация</a></span>
<?}else{?>
   <span class='enter'> <?=$arResult["USER_NAME"]?> </span>
   <span class='register'><a href='?logout=yes' style=" margin-left: 10PX;">Выйти</a></span>
<?}?>