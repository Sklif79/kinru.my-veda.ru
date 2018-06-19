<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Ступица насоса ГДТ - Купить ступицу насоса гидротрансформатора - Цены в России");
$APPLICATION->SetPageProperty("description", "Заказать ступицу насоса гидротрансформатора по всей России оптом. Только качественное оборудование и опытные специалисты. Выгодные цены!");
$APPLICATION->SetTitle("Ступица насоса");
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
		<h1>Ступица насоса гидротрансформатора</h1>
		<p>
			 При ремонте гидротрансформатора АКПП проводится дефектация. На ней обследуется уровень износа элементов. Самые частые участки износа это - шлица турбины, ступица насоса, , накладки блокировки, беговые дорожки подшипников качения и скольжения, износ обгонной&nbsp;муфты реактора, и другие, характерные для отдельной модели ГДТ места износа.
		</p>
		<p>
 <br>
		</p>
		<p>
			 Если на ступице турбины обнаружен критический износ, то производится ее замена. Для того чтобы заменить ступицу насоса ее предварительно вырезают. Потом новый хаб центрируется и приваривается несколькими точками сварки, затем проверяется радиальное биение, и окончательно приваривается. После всех мероприятий еще раз происходит проверка радиального биения. Биение ступицы насоса проверяется на вращающейся планшайбе, с заранее отцентрированным трансформатором по направляющей нижней крышки с помощью переходной втулки. Max. биение - не более 0,2 мм. При этом еще можно заменить сгоревшую накладку блокировки.
		</p>
		<p>
 <br>
		</p>
		<p>
			 После выполнения ремонтных работ важно проверить корпус трансформатора АКПП на герметичность на специальном стенде проверки герметичности гидротрансформаторов SG 50.500, а также проверить балансировку отремонтированного гидротрансформатора на стенде контроля дисбаланса SB 02.350. Только после этих проверок гидротрансформатор ставится на свое место и может правильно работать в течение долгого времени.
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