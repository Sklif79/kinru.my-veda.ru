<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$monthes = array('','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря');
?>
<div class='content'>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class='eblock' id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<? 
  $dat=$arItem['FIELDS']['DATE_CREATE'];
  $dat=strtotime($dat);
  $day = date("j" ,$dat);
  $month = $monthes[date("n",$dat)];
  	$year=date("Y" ,$dat);

  $dat=$day.' '.$month.' '.$year;
  ?>				
			<div style="color: #221f1f;font: normal 30px 'Arial', sans-serif;margin-bottom: 35px;"><?echo $arItem["NAME"]?></div>
				<div class='image'><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/></a>
						</div>
						<div class='info'><span class='date'><b><?=$dat;?></b></span><p><?echo $arItem["PREVIEW_TEXT"];?></p>
		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class='btn-more'>Подробнее</a>
		</div>
		</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
<div class='clear'></div>


