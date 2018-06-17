<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
 $monthes = array('','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря');
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>


  <?$dat=$arItem['FIELDS']['DATE_CREATE'];
  $dat=strtotime($dat);
  $day = date("j" ,$dat);
	$year=date("Y" ,$dat);
  $month = $monthes[date("n",$dat)];
  $dat=$day.' '.$month.' '.$year;
  ?>
	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class='image'><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="123"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/></a>
				</div>
<div class='info'>
<span class="date"><?=$dat;?></span>		
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class='header'><?echo $arItem["NAME"]?></a>
<p><?echo $arItem["PREVIEW_TEXT"];?></p>
						<a href='<?=$arItem["DETAIL_PAGE_URL"]?>' class='about'>подробнее</a>
					</div>
		</li>
<?endforeach;?>
