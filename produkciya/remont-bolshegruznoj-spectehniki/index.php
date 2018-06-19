<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Заказать и купить оборудование для ремонта большегрузной спецтехники. Качественное оборудование и опытные специалисты. Выгодные цены!");
$APPLICATION->SetPageProperty("title", "Оборудование для ремонта большегрузной спецтехники - Купить оборудование для ремонта гидротрансформатора АКПП большегрузных машин");
$APPLICATION->SetTitle("lorem");

$url = $_SERVER['REQUEST_URI'];
$levl = count(explode(".", $url));
//echo $levl;

//форма
require($_SERVER["DOCUMENT_ROOT"] . "/include/form_1.php");
?><div id="slider">
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
            array('HIDE_ICONS' => 'Y')
        ); ?>
    </div>
</div>

<? if ($levl == 1) { ?>


    <? $APPLICATION->IncludeComponent("bitrix:news.list", "spec_order", array(
        "IBLOCK_TYPE" => "spec",
        "IBLOCK_ID" => "7",
        "NEWS_COUNT" => "1",
        "SORT_BY1" => "ID",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "ACSP",
            1 => "",
        ),
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
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "PAGER_TEMPLATE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    ),
        false,
        array(
            "ACTIVE_COMPONENT" => "N",
            'HIDE_ICONS' => 'Y'

        )
    ); ?>

    <div class="content">
        <div class="ec">
            <h1>Оборудование для ремонта большегрузной спецтехники</h1>
<? }// closed if ?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news",
	"OBGT",
	array(
		"IBLOCK_TYPE" => "Produkts",
		"IBLOCK_ID" => "13",
		"NEWS_COUNT" => "200",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "",
		"SORT_ORDER2" => "",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "SVFL",
			1 => "URLYTB",
			2 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SEF_FOLDER" => "/produkciya/remont-bolshegruznoj-spectehniki/",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "OBGT",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false,
	array(
		"HIDE_ICONS" => "N"
	)
); ?>
<? if ($levl == 1) { ?>
        </div><!-- /.ec OBGT-->
    </div><!-- /.content OBGT -->
    <?
    global $USER;
    if ($USER->IsAuthorized()) {
        $aut = 1;
    } else {
        $aut = -1;
    }
    ?>
    <div class="text-block">
        <div class="content">
            <div class="evideo">
                <h2>Видеоматериалы<a <?if($aut==1){echo "href='/products/obgt/secret.php'";}else{ echo "href='#'  deturl='/products/obgt/secret.php' class='login_open'";}?>>Больше видео</a></h2>

                <ul>
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"videoyotube",
						Array(
							"IBLOCK_TYPE" => "File",
							"IBLOCK_ID" => "9",
							"NEWS_COUNT" => "3",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_ORDER1" => "ASC",
							"SORT_BY2" => "",
							"SORT_ORDER2" => "",
							"FILTER_NAME" => "",
							"FIELD_CODE" => array(0=>"",1=>"",),
							"PROPERTY_CODE" => array(0=>"",1=>"ACSP",2=>"FOTONOAUT",),
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
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"PAGER_TEMPLATE" => "",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"SET_BROWSER_TITLE" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_META_DESCRIPTION" => "Y"
						),
						false,
						array('HIDE_ICONS' => 'Y')
					);?>
                </ul>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="materials">
            <h2>Материалы</h2>
            <ul>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "materals",
                    array(
                        "IBLOCK_TYPE" => "File",
                        "IBLOCK_ID" => "10",
                        "NEWS_COUNT" => "6",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "ASC",
                        "SORT_BY2" => "",
                        "SORT_ORDER2" => "",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array(
                            0 => "PREVIEW_PICTURE",
                            1 => "",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "FILEMATERL",
                            2 => "",
                        ),
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
                        "SET_STATUS_404" => "Y",
                        "SET_TITLE" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "AJAX_OPTION_ADDITIONAL" => ""
                    ),
                    false,
                    array('HIDE_ICONS' => 'Y')
                ); ?>
            </ul>
        </div><!-- /.materials -->
        <div class='clear3'></div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "statii_Equipment",
            array(
                "IBLOCK_TYPE" => "1",
                "IBLOCK_ID" => "2",
                "NEWS_COUNT" => "2",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "",
                "SORT_ORDER2" => "",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "PREVIEW_PICTURE",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "VVEQUP",
                    1 => "",
                ),
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
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "PAGER_TEMPLATE" => "",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "AJAX_OPTION_ADDITIONAL" => ""
            ),
            false,
            array('HIDE_ICONS' => 'Y')
        ); ?>
        <div class='clear3'></div>
    </div><!-- /.content -->
<? }//конец условия?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>