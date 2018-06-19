<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "комплект для ремонта dsg 7, цена на дсг 7, мехатроник dsg 7 купить в москве");
$APPLICATION->SetPageProperty("description", "Купить комплект для ремонта DSG 7 в России. ✔Выгодня цена на мехатроник ДСГ 7  от Kinergo. ►Только качественное оборудование от производителя! Еще больше оборудования ищите в нашем каталоге.");
$APPLICATION->SetPageProperty("title", "Купить комплект для ремонта DSG 7, цена на мехатроник ДСГ 7 в Москве");
$APPLICATION->SetTitle("Комплект для ремонта DSG 7");
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
		<h1>Комплект для ремонта DSG 7</h1>
		<p>
			 DSG 7 OAM от KINERGO представляет собой ремонтный набор для решения проблемы, связанной с утечкой гидравлической жидкости из узла гидроаккумулятора.
		</p>
		<p>
			 &nbsp;
		</p>
		<p>
			 Причиной возникновения ошибки P17BF является либо трещина в корпусе гидроблока, либо повреждение самого гидроаккумулятора.
		</p>
		<p>
			 &nbsp;
		</p>
		<p>
			 KINERGO разработало и производит комплект для ремонта DSG 7, который позволяет вернуть полную работоспособность гидроблоку без замены его поврежденного корпуса.
		</p>
		<p>
			 &nbsp;
		</p>
		<p>
			 &nbsp;
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
		<p>
			 &nbsp;
		</p>
		<p>
			 &nbsp;
		</p>
		 <iframe width="854" height="480" src="https://www.youtube.com/embed/A_jdWDD50Hw" frameborder="0" allowfullscreen></iframe>
		<p>
			 &nbsp;
		</p>
		<p>
 <a href="https://www.youtube.com/channel/UCB3eSASP7xa4LTy1-qITKJQ" title="ссылка на канал">Ссылка на наш канал в YouTube</a>
		</p>
		<p>
			 &nbsp;
		</p>
		<p>
			 &nbsp;
		</p>
	</div>
</div>
<div class="clear">
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>