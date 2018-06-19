<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Переходные плиты гидроблока - Купить переходные плиты для тестирования гидроблока в России - Цены");
$APPLICATION->SetPageProperty("description", "Заказать переходные плиты для тестирования гидроблоков АКПП по всей России. Качественное оборудование и опытные специалисты. Выгодно!");
$APPLICATION->SetTitle("Переходные плиты для тестирования гидроблоков");
?><? $url=$_SERVER['REQUEST_URI'] ;
$levl=count(explode(".", $url));
?> <?
//форма
require($_SERVER["DOCUMENT_ROOT"] . "/include/form_1.php");
?>
<div id="slider">
	<div class="content">
		 <?$APPLICATION->IncludeComponent(
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
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"BIGTEXT",1=>"SMALTEXT",2=>"IMGSLIDER",3=>"",),
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
	)
);?>
	</div>
</div>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
	"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
	"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
	"COMPONENT_TEMPLATE" => "breadcrumbs"
),
	false
);?>
<div class="content">
	<div class="design">
		<h1>Переходные плиты для тестирования гидроблока</h1>
		<p>
			 Масляная емкость гидротеста вмещает по меньшей мере 25 литров. <a href="/produkciya/perehodnye-plity-dlya-testirovaniya-gidroblokov/">Устройство позволяет проводить тестирование гидроблоков</a>, у которых разные параметры расхода масла. Согласно параметрам, показатели температуры рабочей жидкости задаются вплоть до 120 градусов по шкале Цельсия. На входе в устройство давление регулируется оператором - оно может находиться в пределах от 0 до 30 бар.<br><br>
		</p>
		<h2 style="font-size: 11pt;">Для чего нужна переходная плита
 </h2>
		<p>
			Для осуществления тестирования гидроблока необходима имитирующая присоединительную поверхность коробки переходная плита. Для любой разновидности АКПП предусматривается оригинальная индивидуальная переходная плита. Также существуют плиты калибровки соленоидов, предназначенные в том числе для трансмиссий серий Aisin Warner TF80 и 55-50. Вам следует самостоятельно осуществлять подбор плит согласно имеющимся данным. Следует отметить, что все оборудование, реализуемое компанией КИНЭРГО, является передовым и высокотехнологичным. Сама компания функционирует на рынке продажи оборудования для тестирования автотрансмиссий уже давно.
		</p>




		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text_mas",
		"EDIT_TEMPLATE" => ""
	)
);?>
	</div>
</div>
<div class="clear">
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>