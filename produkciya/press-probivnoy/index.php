<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Пресс для пробивки отверстий в металле - Купить гидравлический пресс для отверстий ручной -Цены в России");
$APPLICATION->SetPageProperty("description", "Заказать пресс гидравлический ручной для пробивки отверстий по всей России оптом. Только качественное оборудование и опытные специалисты. Выгодные цены!");
$APPLICATION->SetTitle("Пресс пробивной");
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
		<h1>Пробивной гидравлический пресс</h1>
		<p>
			 В процессе осуществления ремонтных работ или при прочей необходимости используется специальное оборудование, с помощью которого пробиваются отверстия в металлах. Благодаря современному высокотехнологичному оборудованию на сегодняшний день сделать это не составляет больших проблем.<br>
 <br>
			 Пробивной гидравлический - это сложный станок, основные функции которого сводятся именно к пробивке отверстий. Он работает на основе гидравлического привода. Купить пресс для пробивки отверстий в металле можно в компании КИНЭРГО. Его выпуски ведется на основе моделей Q46. Вместе с тем, благодаря наиболее передовым инженерным разработкам, его конструктивная часть претерпела определенные изменения в лучшую сторону, напрямую сказываясь на производственном процессе и результатах работы. Поставляется данное оборудование в такой комплектации, чтобы потребитель мог с ним без проблем работать. У станка оптимизированная гидравлическая часть и прочие электрические составные компоненты. Используются только наиболее качественные компоненты, облегчающие и оптимизирующие работу оборудования. <br>
 <br>
			 В своей базовой комплектации данный пробивной станок дает возможность осуществлять операции пробивки листового материала. При этом пользователь самостоятельно задает те параметры, которые считает нужными. На столе размещена линейка диаметром до 31 мм. При этом может быть самая разная форма, в том числе прямоугольная, квадратная, круглая, овальная или заданная человеком в силу производственной необходимости. Пресс пробивной позволяет сделать отверстия практически в любом изделии.<br>
 <br>
			 Посредством крепления оснастки быстрого монтажа на пазах, а также увеличенному ходу цилиндра, это оборудование дает возможность применять оснастку для выполнения конкретных индивидуальных задач, а не только применять ее серийно. Компания КИНЭРГО, работая только с авторитетными производителями, занимается поставкой высокотехнологичного оборудования. <a href="https://kinergo.ru">Широкий ассортимент продукции в КИНЭРГО</a> позволит пополнить запасы практически любого технического складского помещения.
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