<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Пресс гидравлический для автосервиса - Купить пресс для автосервиса - Цены на оборудование для СТО в России - Цены и Каталог");
$APPLICATION->SetPageProperty("description", "Заказать оборудование для автосервиса - прессы и блоки тестирования по всей России. Качественное оборудование и опытные специалисты!");
$APPLICATION->SetTitle("Оборудование для СТО");
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
		<h1>Оборудование для автосервиса и СТО</h1>
		<p>
			 Эффективность работы частной станции технического обслуживания обусловлена наличием специализированного оборудования, которое позволяет в минимальные сроки провести диагностику неполадок рабочего механизма автомобиля или производственного оборудования. Перечень столь важного для СТО оборудования содержит не только механический инвентарь, но также сложную электро - техническую базу, которая позволяет проводить контроль и диагностику максимально точно и эффективно, а ремонт устройств качественно и в приемлемые временные сроки.<br>
 <br>
		</p>
		<h2 style="font-size: 11pt;">Самое популярное оборудование для СТО </h2>
		<p>
			 Для выполнения <a href="/produkciya/oborudovanie-kinergo/ustanovka-svarki-gidrotransformatorov-avtomatizirovannaya-sv-10-004/">установки сварки гидротрансформаторов</a> используется высококлассное электрооборудование, которое позволяет добиться не только высочайшего качества полученного сварного шва, но также обеспечить гарантийную работу механизма после совершения диагностических и ремонтных манипуляций. Управление устройством осуществляется при помощи удобного меню на компактном мониторе, благодаря которому отследить качество выполненной работы не составляет особого труда.<br>
 <br>
			 Механизм <a href="/produkciya/oborudovanie-kinergo/ustanovka-nakleivaniya-friktsionnykh-nakladok-nf-08-400/">наклеивания фрикционных накладок</a> также требует индивидуального подхода к каждому случаю. Благодаря использованию специализированной техники можно позабыть о рисках повреждения поверхности гидротрансформатора, так как тепловое воздействие устройства действует точечно, не допуская излишнего нагрева смежных элементов.<br>
 <br>
 <a href="/produkciya/oborudovanie-kinergo/press-gidravlicheskiy-pg-10-012/">Гидравлический пресс</a> пользуется потрясающей популярностью на специализированных станциях технического обслуживания автомобилей и спецтехники, так как в его потенциал и функциональность входит способность быстро и качественно выполнять работу по приданию металлу нужной формы и конфигурации. Быстрое и точное воздействие позволяет осуществлять выравнивание или изгиб цельных деталей благодаря мощности и эффективности работы пресса. Электрический или гидравлический приводы обеспечивают возможность быстрого и качественного управления техникой, демонстрируя высочайший уровень производительности и эффективности как при небольших объемах работы, так и в случае работы с производственными масштабами. <br>
		</p>
		<p>
 <br>
		</p>
		<p>
			 Купить гидравлический пресс для автосервиса и другой важное оборудование для СТО можно по отличной цене в нашей компании по всей России.<br>
		</p>
		<p>
			 Комплект оборудования представляет из себя полноценный набор оборудования для начала ремонта до 300 ГДТ в месяц (в том числе 6-ступенчатые (и выше) ZF 6HPxx)
		</p>
		<ul>
			<li>SV 10.003 – сварочник</li>
			<li>NF 03.400 – наклейка фрикциона</li>
			<li>SG 50.500 – проверка герметичности</li>
			<li>TZ 03.800 – проверка теплового зазора</li>
			<li>IN 06.001 – стенд контроля преднатяга механизма блокировки для 6-ступенчатых ZF 6HPxx</li>
			<li>заклепочник (пневмогидравлический)</li>
			<li>два набора оснастки (для замены шейки ГДТ и планшайба для токарного станка).</li>
		</ul>
		<p>
			 Наша компания проведет обучение вашего персонала в собственном цехе по ремонту ГДТ по принципу «мастер подмастерье». Альтернативно можно привлечь нашего специалиста к вам в мастерскую. Условия при этом будут договорные. Процесс подготовки специалистов занимает в среднем 1 неделю. Стоимость альтернативного обучения у дистрибьютора зависит от выбранного вами места прохождения обучения. Более подробную информацию предоставит дистрибьютор.
		</p>
 <br>
 <br>
		<div style="width: 1050px;">
			<div style="padding: 30px 0 30px 75px; background: #e3e3e1; border-radius: 3px; margin-right: 50px; box-shadow: 0 0 0 5px #696e79, 0 0 0 12px #444a58, 0 0 0 13px rgba(255,255,255,0.2);">
				<div style="display: inline-block; vertical-align: middle;">
 <span style="color: #363434; font-size: 15pt;">Связаться с отделом продаж для бесплатной консультации</span>
					<ul>
						<li style="list-style-type: none; padding-top: 10px; font-weight: bold; font-size: 16pt;"><span style="font-weight: normal;">тел.:</span> +375 17 200-60-92</li>
						<li style="list-style-type: none; padding-top: 10px; font-weight: bold; font-size: 16pt;"><span style="font-weight: normal;">e-mail:</span> <a href="mailto:admin@kinergo.ru">admin@kinergo.ru</a></li>
					</ul>
				</div>
				<div>
 <span style="font-size: 20pt; color: #7b7b7b; position: relative; left: 610px; bottom: 50px;">или</span> <a href="#" namem="комплект оборудования для СТО," class="cenazakaz_open" data-popup-ordinal="1" id="open_69339447" style="color: white; text-decoration: none;">
					<div style="display: inline-block; vertical-align: middle; cursor: pointer; padding: 15px 50px; color: #fff; background: #ec461f; border-radius: 3px; text-align: center; outline: none; float: right ; position: relative; bottom: 55px; right: 30px; ">
						 Заказать звонок
					</div>
 </a>
				</div>
			</div>
		</div>
 <br>
		 <script>function() {
  var tex = $(this).attr('namem');
  $('#TextTovar').html('Меня заинтересовали ' + tex + ' прошу выслать подробную информацию на мою электронную почту');
  var mal = $('#user_dan').attr('user_mail');
  $('#form_emal_cen').val(mal);
}
</script> <script>
function(event) {
  event.preventDefault();

  var ord = $(this).data('popup-ordinal');
  setTimeout(function() { // setTimeout is to allow `close` method to finish (for issues with multiple tooltips)
    methods.show(el, ord);
  }, 0);
}
</script> <?$APPLICATION->IncludeComponent(
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