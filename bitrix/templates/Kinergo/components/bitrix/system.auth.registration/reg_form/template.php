<?
/**************************
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
$arCountry = false;
?>
<form method="post"
      action="https://<?= $_SERVER['HTTP_HOST'] ?>/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/ajax.php"
      name="bform" id='FormRegValid'>
    <input type="text" name="L_USER_LOGIN" id="L_USER_LOGIN" maxlength="50" value="<?= $_POST['L_USER_LOGIN']; ?>"
           placeholder='Логин' class="input-text"/>
    <?
    if (CModule::IncludeModule('iblock')) {
        $IBLOCK_ID = 14;
        $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_PICTURE", "DETAIL_TEXT");
        $arFilter = Array("IBLOCK_ID" => $IBLOCK_ID);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arFields = $ob->GetFields();
            $arCountry[] = array(
                "NAME" => $arFields['NAME'],
                "NAME_EN" => $arFields['PREVIEW_TEXT'],
                "CODE_PHONE" => $arFields['DETAIL_TEXT'],
            );
        }
    }

    ?>
    <style>
        select {
            font: normal 11px arial;
            color: #808080;
            padding: 0px 15px;
            border: 1px solid #010204;
            height: 33px;
            margin-bottom: 15px;
            background-color: white;
            width: 260px;
        }
    </style>
    <select name="L_USER_CODE">
        <option value="">Выберите код страны</option>
        <? foreach ($arCountry as $code) { ?>
            <option <? if ($code['CODE_PHONE'] == $_POST['L_USER_CODE']) {
                echo 'selected="selected"';
            } ?> value="<?= $code['CODE_PHONE'] ?>"><?= $code['NAME'] ?> [ + <?= $code['CODE_PHONE'] ?> ]
            </option>
        <? } ?>
    </select>
    <input type="text" name="L_USER_PHONE" id="L_USER_PHONE" maxlength="255" value="<?= $_POST['L_USER_PHONE']; ?>"
           class="input-text" placeholder='Телефон'/>
    <input type="password" name="L_USER_PASSWORD" id="L_USER_PASSWORD" maxlength="50"
           value="<?= $_POST['L_USER_PASSWORD']; ?>" placeholder='Пароль' class="input-text"/>
    <input type="password" name="L_USER_CONFIRM_PASSWORD" id="L_USER_CONFIRM_PASSWORD" maxlength="50"
           value="<?= $_POST['L_USER_CONFIRM_PASSWORD']; ?>" placeholder='Пароль (подтверждение)' class="input-text"/>
    <input type="text" name="L_USER_LAST_NAME" id="L_USER_LAST_NAME" maxlength="50"
           value="<?= $_POST['L_USER_LAST_NAME']; ?>" class="input-text" placeholder='Полное имя'/>
    <input type="text" name="L_USER_EMAIL" id="L_USER_EMAIL" maxlength="255" value="<?= $_POST['L_USER_EMAIL']; ?>"
           class="input-text" placeholder='Email адрес'/>

    <?
    include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/classes/general/captcha.php");
    $cpt = new CCaptcha();
    $captchaPass = COption::GetOptionString("main", "captcha_password", "");
    if (strlen($captchaPass) <= 0) {
        $captchaPass = randString(10);
        COption::SetOptionString("main", "captcha_password", $captchaPass);
    }
    $cpt->SetCodeCrypt($captchaPass);
    ?>
    <img src="/bitrix/tools/captcha.php?captcha_code=<?= htmlspecialchars($cpt->GetCodeCrypt()); ?>">
    <br>
    <input name="captcha_code" value="<?= htmlspecialchars($cpt->GetCodeCrypt()); ?>" type="hidden">
    <input id="captcha_word" name="captcha_word" class='input-text' placeholder='captcha code *' type="text">

    <div class='center'><input type='submit' class='button' value='Зарегистрироваться'/></div>
</form>
<style type="text/css">
    .error {
        color: rgb(4, 2, 5);
        margin-bottom: 10px;
        display: block;
    }
</style>
<script>
    $(document).ready(function () {
        var options = {
            timeout: 3000,// тайм-аут
            success: function (response) {
                $("#register").html(response);
                var err = $("#errL").attr('err');
                if (err != 'error') {
                    $.ajax({
                        type: "POST",
                        url: "https://<?=$_SERVER['HTTP_HOST'];?>/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/form.php",
                        data: "&LUI=Y",
                        success: function (response) {
                            $("#linkJS").html(response);
                            //setTimeout(function() { $('.register_close').trigger('click'); }, 3000);
                            var pol = $('#URAD').attr('URAD');
                            if (pol == 1) {
                                urad1();
                            }
                            ;
                            if (pol == 2) {
                                urad2();
                            }
                            ;
                            if (pol == 3) {
                                urad3();
                            }
                            ;
                        }
                    });
                }

            }
        };
        $("#FormRegValid").validate({
            submitHandler: function (form) {
                $(form).ajaxSubmit(options);
            },
            rules: {
                L_USER_LOGIN: {
                    required: true,
                    minlength: 4,
                    maxlength: 16,
                    remote: "https://<?=$_SERVER['HTTP_HOST'];?>/bitrix/templates/Kinergo/components/bitrix/system.auth.registration/reg_form/provlog.php",
                },
                L_USER_PASSWORD: {
                    required: true,
                    minlength: 6,
                    maxlength: 16,
                },
                L_USER_CODE: {
                    required: true,
                },
                L_USER_PHONE: {
                    required: true,
                    minlength: 6,
                    maxlength: 16,
                },
                L_USER_CONFIRM_PASSWORD: {
                    required: true,
                    minlength: 6,
                    maxlength: 16,
                    equalTo: "#L_USER_PASSWORD",
                },
                L_USER_LAST_NAME: {
                    required: true,
                    minlength: 2,
                },
                L_USER_EMAIL: {
                    required: true,
                    email: true,
                },

            },
            messages: {
                L_USER_LOGIN: {
                    required: "Это поле обязательно для заполнения",
                    minlength: "Логин должен быть минимум 4 символов",
                    maxlength: "Максимальное число символов - 16",
                    remote: "логин уже существует введите другой.",
                },
                L_USER_PHONE: {
                    required: "Это поле обязательно для заполнения",
                    minlength: "Пароль должен быть минимум 6 символов",
                    maxlength: "Пароль должен быть максимум 16 символов",
                },
                L_USER_PASSWORD: {
                    required: "Это поле обязательно для заполнения",
                    minlength: "Пароль должен быть минимум 6 символов",
                    maxlength: "Пароль должен быть максимум 16 символов",
                },
                L_USER_CODE: {
                    required: "Это поле обязательно для заполнения",
                },
                L_USER_CONFIRM_PASSWORD: {
                    required: "Это поле обязательно для заполнения",
                    equalTo: "Пароли должны совподать",
                    minlength: "Пароль должен быть минимум 6 символов",
                    maxlength: "Пароль должен быть максимум 16 символов",
                },
                L_USER_LAST_NAME: {
                    required: "Это поле обязательно для заполнения",
                    minlength: "Имя должен быть минимум 2 символа",
                },
                L_USER_EMAIL: {
                    required: "Это поле обязательно для заполнения",
                    email: "Email адрес должен быть корректным",
                },
            }
        });
    });
</script>