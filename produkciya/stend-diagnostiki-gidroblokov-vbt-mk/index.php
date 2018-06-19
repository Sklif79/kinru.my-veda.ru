<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Заказать стенд для диагностики, проверки и ремонта гидроблока АКПП от производителя Kinergo выгодно. ✔Низкая цена на оборудование VBTМ-K в России. ►Качество и опытные специалисты!");
$APPLICATION->SetPageProperty("title", "Стенд для диагностики гидроблока АКПП, цена на оборудование для проверки и ремонта АКПП");
$APPLICATION->SetTitle("продукция");
?><?
//форма
require($_SERVER["DOCUMENT_ROOT"] . "/include/form_1.php");
?>
    <style>
        .gridr ol, .gridr ul {
            margin-left: 20px;
        }
    </style>
    <div id="slider">
        <div class="content">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "slider_head",
                Array(
                    "IBLOCK_TYPE" => "slider",
                    "IBLOCK_ID" => "4",
                    "NEWS_COUNT" => "5",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "",
                    "SORT_ORDER2" => "",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array(0 => "", 1 => "",),
                    "PROPERTY_CODE" => array(0 => "BIGTEXT", 1 => "SMALTEXT", 2 => "IMGSLIDER", 3 => "",),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "AJAX_OPTION_HISTORY" => "N",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "PAGER_TEMPLATE" => "",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "AJAX_OPTION_ADDITIONAL" => ""
                ),
                false,
                Array(
                    'HIDE_ICONS' => 'Y'
                )
            ); ?>
        </div>
    </div>
<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
    "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
    "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
    "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
    "COMPONENT_TEMPLATE" => "breadcrumbs"
),
    false
); ?>
    <div id="center">
        <div class="content">
            <div class="equipment">
                <div class="gridl">

<!-- old slider
                    <div class="image">
                    <div class="image_slider">
                        <div class="item">
                            <a data-fancybox="gallery "
                               href="/upload/iblock/508/5080fc4449842a3d2b1ae646fb5f124f.png">
                                <img src="/upload/iblock/508/5080fc4449842a3d2b1ae646fb5f124f.png" width="310"
                                     height="373" alt="Стенд диагностики гидроблоков VBTМ-K"
                                     title="Стенд диагностики гидроблоков VBTМ-K">
                            </a>
                        </div>
                    </div>
                </div>
/old slider -->

<!-- new slider-->
                    <!--     include there slider from page   http://kineu.my-veda.ru/products/obgt/     -->
                    <!--     for video items add data-video attribute with source in image tag,
                            for example   data-video="https://www.youtube.com/embed/Zfxm-ZvveQs", like last thumbnail     -->
                    <div class="image">
                        <div class="image_slider">
                            <div class="item">
                                <a data-fancybox="gallery " href="/upload/iblock/179/179401802a7d708af9cd9f19634d8cf7.png">
                                    <img src="/upload/iblock/179/179401802a7d708af9cd9f19634d8cf7.png" width="268" height="389" alt="Станок сварки гидротрансформаторов автоматический SV 50.001" title="Станок сварки гидротрансформаторов автоматический SV 50.001">
                                </a>
                            </div>
                        </div>
                        <div class="image_slider_nav">
                            <span class="item_nav">
                                <img src="/upload/resize_cache/iblock/57c/90_90_1/57c9d09f7c93d0b437b8898aa9211ba7.png" alt="Станок сварки гидротрансформаторов автоматический SV 50.001" title="Станок сварки гидротрансформаторов автоматический SV 50.001" data-bigimg="/upload/iblock/57c/57c9d09f7c93d0b437b8898aa9211ba7.png">
                            </span>
                            <span class="item_nav">
                                <img src="/upload/resize_cache/iblock/d3c/90_90_1/d3cd34d053639d55242b194a20dfe08e.png" alt="Станок сварки гидротрансформаторов автоматический SV 50.001" title="Станок сварки гидротрансформаторов автоматический SV 50.001" data-bigimg="/upload/iblock/d3c/d3cd34d053639d55242b194a20dfe08e.png">
                            </span>
                            <span class="item_nav active">
                                <img src="/upload/resize_cache/iblock/179/90_90_1/179401802a7d708af9cd9f19634d8cf7.png" alt="Станок сварки гидротрансформаторов автоматический SV 50.001" title="Станок сварки гидротрансформаторов автоматический SV 50.001" data-bigimg="/upload/iblock/179/179401802a7d708af9cd9f19634d8cf7.png">
                            </span>
        <!--       video             -->
                            <span class="item_nav">
                                <img src="http://www.backgroundsy.com/file/film-frame-play.jpg" alt="Automatic Torque Converters industrial welding machine SV 50.001" title="Automatic Torque Converters industrial welding machine SV 50.001" data-bigimg="http://www.backgroundsy.com/file/film-frame-play.jpg" data-video="https://www.youtube.com/embed/Zfxm-ZvveQs">
                            </span>
        <!--       /video             -->
                        </div>
                    </div>
<!-- /new slider -->

<!-- delete
                    <div class="video">
                        <iframe width="310" height="205" src="https://www.youtube.com/embed/PiXPm6zsXQ4" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <a target="_blanck" href="https://www.youtube.com/watch?v=VLkzAM6VbF4"></a>
                    </div>
                    <a deturl="/produktsiya/obgt/secret.php" id="a_obgt_open" href="/products/obgt/secret.php"
                       class="  btn-more header">Дополнительные материалы</a>
/delete -->

                </div>
                <div class="gridr">
                    <div class="article-description js_min-height">
                        <div class="article-description__inner">
                        <h1>Стенд диагностики гидроблоков VBTМ-K</h1>
                        <p></p>
                        <p style="text-align: justify;">
                            Стенд диагностики гидроблоков VBTМ-K - установка для тестирования и ремонта гидроблоков
                            (ГБ) автоматической трансмиссии (АКПП). Установка посредством <a
                                    href="/produkciya/kontrollery/">электронного контролера</a> симулирует работу АКПП
                            и согласно предписанным программам переключения передач и подает напряжение на соленоиды
                            гидроблока, после чего снимает показания выходного давления с каждого канала и формирует графики
                            зависимости, отображающие отклонение давления тестируемого ГБ от эталонного (нового ГБ). Работа
                            производится с ATF нагретым до рабочих температур и при разных входных давлениях, таким
                            образом исключается погрешность, возникающая при изменении вязкости ATF на различных
                            температурах. 
                        </p>
                        <p style="text-align: justify;">
                            Графики с эталонными тестами новых ГБ уже "залиты" в программную оболочку. ГБ устанавливается на
                            <a href="/produkciya/perehodnye-plity-dlya-testirovaniya-gidroblokov/">тестировочную плиту</a>,
                            подключаются датчики на выходные каналы и оператор запускает первый тест (полный цикл работы
                            АКПП). Далее тесты повторяются несколько раз на разных входных давлениях. После завершения
                            тестирования на экран выводится график с результатом теста. 
                        </p>
                        <p style="text-align: justify;">
                            <b><a href="/novosti/testirovanie-gidrobloka-akpp-na-hydratest-vbt/">Подробное описание работы
                                    установки VBTM-K  в статье</a></b>
                        </p>
<!--                        <a href="#" namem="Стенд диагностики гидроблоков VBTМ-K" class="btn-price cenazakaz_open"-->
<!--                           data-popup-ordinal="0" id="open_34038386">Узнать стоимость</a>-->

<!--      delete
                        <p style="text-align: justify;">
                            <br>
                        </p>
                        <p style="text-align: justify;"><br>
                        </p>
                        <h2 style="font-size: 11pt; font-weight: bold;">Тестировочная плита (адаптер) и график теста</h2>
                        <p style="text-align: center;" class="">
                            <img width="270" alt="5H19-BMW.jpg"
                                 src="/upload/medialibrary/05a/05a8defc3b12da7d052a9c2e074832a8.png" title="5H19-BMW.jpg"> 
                             <img width="270" alt="DPO.jpg"
                                  src="/upload/medialibrary/774/774eef9624bf027a5d79e795ce2ea21c.png" title="DPO.jpg"> 
                             <img width="270" alt="DPO.jpg"
                                  src="/upload/medialibrary/774/774eef9624bf027a5d79e795ce2ea22c.jpg" title="DPO.jpg"> 
                             <img width="246" alt="screen.PNG"
                                  src="/upload/medialibrary/dd0/dd05530e00823f035771a8a338dc0b9f.PNG" height="155"
                                  title="screen.PNG"><br>
                        </p>
                        <p style="text-align: justify;"><br>
                        </p>
                        <h2 style="font-size: 11pt; font-weight: bold;">
                            Плиты-адаптеры для установки:
                        </h2>

                        <p style="text-align: justify;">
                        </p>
                            /delete    -->
                        <div id="_appInstalled">
                        </div>
<!--      delete                   
                        <table style="border-collapse: collapse; width: 461pt;" width="614" cellspacing="0" cellpadding="0">
                            <colgroup>
                                <col style="width: 244pt;" width="325">
                                <col style="width: 77pt;" width="102">
                                <col style="width: 11pt;" width="15">
                                <col style="width: 129pt;" width="172">
                            </colgroup>
                            <tbody>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; width: 244pt;" width="325" height="20">Model</td>
                                <td style="border-left-width: initial; border-left-color: initial; width: 77pt;"
                                    width="102">Number
                                </td>
                                <td style="border-left-width: initial; border-left-color: initial; width: 11pt;" width="15">
                                     
                                </td>
                                <td style="border-left-width: initial; border-left-color: initial; width: 129pt;"
                                    width="172">CABLE
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>AISIN WARNER</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    50-40 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70111
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70111C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    60-40 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70112
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70112C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    AF17 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70113
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70113C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    55-50SN Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70114
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70114C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    55-50
                                    Calibration Plate for solenoids calibration
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70115
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    As indicated above
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TF80 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70116
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70116C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TF81 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70118
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70118C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TF70-TF80 Mk
                                    2  Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70203
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    As indicated above
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TF80S Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70193
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70193C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TF70-TF80 Mk 2
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70194
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70194C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TF60-09G Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70119
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70119C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TF60-TR60
                                    Solenoid Plate for solenoid testing
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70204
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    As indicated above
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TR60-09D Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70120
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70120C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    TR80-0C8 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70137
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70137C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>MERCEDES</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    722.6 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70124
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70124C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    722.7 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70125
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70125C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    722.8 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70333
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70333С/Р
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    722.9 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70126
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70126C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>ZF</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5HP18 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70129
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70129C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5HP30 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70130
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70130C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5HP19-Audi
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70131
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70131C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5HP19-BMW
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70132
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    As indicated above
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5HP24 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70133
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70133C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5HP24-A Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70134
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    As indicated above
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    4HP20 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70135
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70135C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    4HP22-24 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70136
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70136C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6HP19-26-32
                                    (Gen 1) Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70138
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70138C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6HP21-28-34
                                    (Gen 2) Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70188
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70188C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    8HP45-70Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70242
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70242C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    9HP28-48Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70334
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70334C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>CHRYSLER</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    A604-41TE
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70139
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70139C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    A606-42LE
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70237
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    As indicated above
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    A518-46RE
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70141
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70141C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    45RFE-545RFE
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70142
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70142C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    62TE Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70238
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70238C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>VW</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    096-097 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70143
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70143C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    01M-N-P Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70144
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70144C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    DSG-02E Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70192
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70192C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20">RENAULT / PEUGEOT /
                                    CITROEN
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    DP0-AL4 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70173
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70173C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>FORD</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    CD4E Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70146
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70146C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    4R44E-5R55E
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70147
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70147C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    AODE Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70148
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70148C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    AXODE-AX4S
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70149
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70149C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    AX4N-4F50N
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70150
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70150C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    E40D-4R100
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70151
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70151C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5R55N Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70154
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70154C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5R55-WS Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70155
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70155C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    4F27E Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70156
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70156C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5R110 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70195
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70195C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6R140 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70245
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70245C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6R60-6R80
                                    (Gen.1)Valve body test plate
                                </td>
                                <td rowspan="2"
                                    style="border-bottom-width: 0.5pt; border-bottom-style: solid; border-top-width: initial; border-top-color: initial; width: 77pt;"
                                    width="102">Plate 70138 for ZF is usable
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td rowspan="2"
                                    style="border-bottom-width: 0.5pt; border-bottom-style: solid; border-top-width: initial; border-top-color: initial; width: 129pt;"
                                    width="172">Plate 70138 for ZF is usable
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6R60-6R80
                                    (Gen.2)Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6DCT450-470
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70246
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70246C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>GM</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    4L60E Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70158
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70158C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    4L80E Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70160
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70160C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6L45-90Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70243
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial;">70243C/H</td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    4T65EValve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70162
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70162C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6T40-45 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70153
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70153C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    6T70Valve body
                                    test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70244
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial;">70244C/H</td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    5L40EValve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70165
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70165C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    Saturn
                                    TAATValve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70335
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70335C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    Allison
                                    LCT1000Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70274
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70274C/H (2pcs)
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>JATCO</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    JF506E Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70166
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70166C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>NISSAN</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    RE4F02A Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70170
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70170C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    RE4R03A Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70169
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70169C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    RE4F04A Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70171
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70171C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    RE5R05A Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70196
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70196C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>TOYOTA</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    U240E-U250E
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70215
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial; width: 129pt;"
                                    width="172">70215C/H
                                    (3pcs.)
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    U660E Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70197
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70197C/H
                                </td>
                            </tr>
                            <tr style="height: 26.25pt;" height="35">
                                <td style="height: 26.25pt; border-top-width: initial; border-top-color: initial;"
                                    height="35">A750-A761
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70239
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial; width: 129pt;"
                                    width="172">70239C/H
                                    <br>
                                    for A750 only!
                                </td>
                            </tr>
                            <tr style="height: 26.25pt;" height="35">
                                <td style="height: 26.25pt; border-top-width: initial; border-top-color: initial;"
                                    height="35">A960E Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70240
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial; width: 129pt;"
                                    width="172">70240C/H
                                    <br>
                                    А760 - А960
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td colspan="4" style="height: 15pt;" height="20"><b>MITSUBISHI / HYUNDAI
                                        / KIA</b></td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    KM175-6-7
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70174
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70174C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    F4A41-42-51
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70175
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70175C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    F5A51 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70176
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70176C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    V5A51 Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70128
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70128C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    A4AF3-A4BF3
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70702
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70702C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    A4CF1-A4CF2
                                    Valve body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70705
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70705C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    A6LF Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70177
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70177C/H
                                </td>
                            </tr>
                            <tr style="height: 15pt;" height="20">
                                <td style="height: 15pt; border-top-width: initial; border-top-color: initial;" height="20">
                                    A6MF Valve
                                    body test plate
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    70241
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                     
                                </td>
                                <td style="border-top-width: initial; border-top-color: initial; border-left-width: initial; border-left-color: initial;">
                                    As indicated above
                                </td>
                            </tr>
                            </tbody>
                        </table>
/delete    -->
                    </div>

                        <div class="article-description__btns">
                            <a href="#" class="btn-tech">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</a>
                            <a href="#" namem="Стенд диагностики гидроблоков VBTМ-K" class="btn-price cenazakaz_open"
                           data-popup-ordinal="1" id="open_49519426">Уточнить цену</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- div.content aside nav and sliders insert here -->
    </div>
    <div class='clear'></div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>