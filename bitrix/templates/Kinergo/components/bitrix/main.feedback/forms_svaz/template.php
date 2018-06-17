<? require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php"); ?>
<?
include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/classes/general/captcha.php");
$code = $APPLICATION->CaptchaGetCode();
?>
    <div id='svaz_form_obr_otvet'>
        <? if (($_POST['foms_l_s']) && ($APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_sid"]))){ ?>
            <?
            ?>
			<h1 style="color:#8abb0d;">Ваш запрос получен.</h1>
            <?
            $arEventFields = array(
                "NAME" => $_POST['s_user_name'],
                'EMAIL' => $_POST['s_user_email'],
                'PHONE' => $_POST['s_user_phone'],
                'COMPANY' => $_POST['s_organization_name'],
                'BUSINESS' => $_POST['s_svera_eadt'],
                'REGION' => $_POST['s_strana_region'],
                'JOB' => $_POST['s_dolznost'],
                'US' => $_POST['s_info_onas'],
                'MASSAGE' => $_POST['s_masage'],
            );

            CEvent::SendImmediate("FEEDBACK_FORM", array('s1'), $arEventFields); ?>
        <? }else{ ?>
        <?if ((isset($_POST["captcha_word"]) && !empty($_POST["captcha_word"])) && (!$APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_sid"]))){
            ?><h2>Неверный код Captcha</h2><?
        }?>
        <form id='svaz_form_obr'
              action="/bitrix/templates/Kinergo/components/bitrix/main.feedback/forms_svaz/template.php" method="POST">
            <input type="hidden" name='foms_l_s' value='Y'>
            <div class="block">
                <input type="text" name="s_user_name" id="s_user_name" value="<?=htmlspecialchars($_POST['s_user_name'])?>" class="input-text"
                       placeholder="ваше имя и фамилия*">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_user_email" value="<?=htmlspecialchars($_POST['s_user_email'])?>"  name="s_user_email" placeholder="e-mail*">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_user_phone" value="<?=htmlspecialchars($_POST['s_user_phone'])?>"  name="s_user_phone"
                       placeholder="телефон для контакта*">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_organization_name" value="<?=htmlspecialchars($_POST['s_organization_name'])?>"  name="s_organization_name"
                       placeholder="название организации*">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_svera_eadt" value="<?=htmlspecialchars($_POST['s_svera_eadt'])?>"  name="s_svera_eadt"
                       placeholder="сфера деятельности">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_strana_region" value="<?=htmlspecialchars($_POST['s_strana_region'])?>"  name="s_strana_region"
                       placeholder="страна / регион">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_dolznost" value="<?=htmlspecialchars($_POST['s_dolznost'])?>"  name="s_dolznost" placeholder="должность">
            </div>
            <div class="block">
                <input type="text" class="input-text" id="s_info_onas" value="<?=htmlspecialchars($_POST['s_info_onas'])?>"  name="s_info_onas"
                       placeholder="откуда вы узнали о нас">
            </div>
            <textarea name="s_masage" id="s_masage" class="input-comm"></textarea>
            <span class="need-pole">поля, отмеченные * - обязательны для заполнения</span>
            <input type="hidden" name="captcha_sid" value="<?= $code; ?>"/>

			<div class="submit-wrap">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?= $code; ?>" alt="CAPTCHA"/>
				<input type="text" class="input-text" id="captcha_word" name="captcha_word"
					   placeholder="Введите код с картинки">
				<input type="submit" class="btn-submit" value="отправить" onclick="yaCounter43283679.reachGoal('otpravitkontakty');">
			</div>

        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var options = {
                timeout: 3000,// тайм-аут
                success: function (response) {
                    $("#svaz_form_obr_otvet").html(response);

                }
            }

            $("#svaz_form_obr").validate({
                submitHandler: function (form) {
                    $(form).ajaxSubmit(options);
                },
                rules: {
                    s_user_name: {
                        required: true,
                        minlength: 1,
                        maxlength: 36,
                    },
                    s_user_email: {
                        required: true,
                        email: true,
                    },
                    s_user_phone: {
                        required: true,
                        minlength: 7,
                        number: true,
                    },

                    s_organization_name: {
                        required: true,
                        minlength: 3,
                    },
                    captcha_word:{
                        required: true,
                        minlength: 5,
                    }

                },
                messages: {
                    s_user_name: {
                        required: "Это поле обязательно для заполнения",
                        minlength: "Минимум 4 символов",
                        maxlength: "Максимальное число символов - 36",
                    },
                    s_user_email: {
                        required: "Это поле обязательно для заполнения",
                        email: "Введите правильный email адрес!",
                    },
                    s_user_phone: {
                        required: "Это поле обязательно для заполнения",
                        minlength: "Минимум 7 символов",
                        number: "Вводите только числа",
                    },
                    s_organization_name: {
                        required: "Это поле обязательно для заполнения",
                        minlength: "Минимум 3 символа",
                    },
                    captcha_word:{
                        required: "Это поле обязательно для заполнения",
                        minlength: "5 символов с картинки",
                    }
                }

            });

        });

    </script>
    <style type="text/css">
        .error {
            font-size: 10px;
        }
    </style>
<? } ?>