<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<input type="hidden" user_mail="<?=$mail_f_1?>" id='user_dan'>
<ul class="">
<?
GLOBAL $USER;
$mail_f_1=$USER->GetEmail();
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li  id="<?=$this->GetEditAreaId($arItem['ID']);?>">



<div class='image'>
    <div class="image_slider">
        <div class="item">
            <a data-fancybox="gallery " href='<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>'>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                     width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                     height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/>
            </a>
        </div>
    </div>
    <?
    //krumo($arItem["PROPERTIES"]["UF_GALERY"]["VALUE"]);
    if ($arItem["PROPERTIES"]["UF_GALERY"]["VALUE"] !== false && count($arItem["PROPERTIES"]["UF_GALERY"]["VALUE"]) > 0)
    {
        // делаем ресайз
        // BX_RESIZE_IMAGE_EXACT
        // $arFile = CFile::GetFileArray($arElement["PREVIEW_PICTURE"]);
        $file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array('width' => 90, 'height' => 90), BX_RESIZE_IMAGE_PROPORTIONAL, true);
        ?>
        <div class="image_slider_nav">
            <span class="item_nav">
                <img src="<?=$file["src"]?>"
                     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                     data-bigimg="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
            </span>
            <? foreach($arItem["PROPERTIES"]["UF_GALERY"]["VALUE"] as $img)
            {
				$file = CFile::ResizeImageGet($img, array('width' => 90, 'height' => 90), BX_RESIZE_IMAGE_PROPORTIONAL, true);
				$img_src = CFile::GetPath($img);
                ?><span class="item_nav">
                    <img src="<?=$file["src"];?>"
                         alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                         title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                         data-bigimg="<?=$img_src?>" />
                </span><?
            }?>
        </div>
        <?
    }
    ?>
</div>
						<div class='info'>
							<a href='<?echo $arItem["DETAIL_PAGE_URL"]?>' class='header'><?echo $arItem["NAME"]?></a>
							<p><?echo $arItem["PREVIEW_TEXT"];?></p>
							<a href='<?echo $arItem["DETAIL_PAGE_URL"]?>' class='btn-tech'>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</a><a href='#' namem='<?echo $arItem["NAME"]?>' class='btn-price cenazakaz_open'>УТОЧНИТЬ ЦЕНУ</a>
						</div>




	</li>
<?endforeach;?>
</ul>

