<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class='content'>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class='eblock' id="<?=$this->GetEditAreaId($arItem['ID']);?>">

	<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>				
			<div style="color: #221f1f;
    font: normal 30px 'Arial', sans-serif;
    margin-bottom: 35px;"><?echo $arItem["NAME"]?></div>
			<?else:?>
			<div style="color: #221f1f;
    font: normal 30px 'Arial', sans-serif;
    margin-bottom: 35px;"><?echo $arItem["NAME"]?></div>
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<div class='image'><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/></a></div>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
		<div class='info'><p><?echo $arItem["PREVIEW_TEXT"];?></p>
		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class='btn-more'>Подробнее</a>
		</div>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
				<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
		<?endforeach;?>
		</div>
<?endforeach;?>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
<div class='clear'></div>


