<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$page = $APPLICATION->GetCurPage();

foreach($arResult["ITEMS"] as $arItem):

	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

    if($arItem['PROPERTIES']['ACSP']['VALUE_XML_ID']=='Y')
    {
        if($page != '/')
        {
            ?>
            <div class="text-block">
	            <div class="content">
            <?
        }
        ?>
        <h1>Спецпредложение</h1>
        <div class='special-offer' id="<?=$this->GetEditAreaId($arItem['ID']);?>" >
            <div class='image'>
                <a href='<?=$arItem["DETAIL_PAGE_URL"]?>'>
				    <img 	src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					    	width="240"
						    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
				    />
                </a>
            </div>
			<div class='info'>
				<p><?echo $arItem["PREVIEW_TEXT"];?></p>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class='btn-more'>Подробнее</a>
			</div>
        </div>
        <?
        if($page != '/')
        {
            ?>
	            </div>
            </div>
            <?
        }
    }
endforeach;