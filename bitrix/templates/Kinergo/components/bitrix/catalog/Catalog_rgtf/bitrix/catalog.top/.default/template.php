<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
global $USER;
if ($USER->IsAuthorized()){$aut=1;}else{$aut=-1;}
?>
<div class='right'>
		<div class='nodes'>
				<h1>Новинки раздела</h1>
				<ul class='slider2'>

<?
function cutStr($str, $lenght = 100, $end = '...', $charset = 'UTF-8', $token = '~') {
    $str = strip_tags($str);
    if (mb_strlen($str, $charset) >= $lenght) {
        $wrap = wordwrap($str, $lenght, $token);
        $str_cut = mb_substr($wrap, 0, mb_strpos($wrap, $token, 0, $charset), $charset);    
        return $str_cut .= $end;
    } else {
        return $str;
    }
} 
?>
<? foreach ($arResult['ITEMS'] as $key => $arItems) { ?>
	<li class="luitop">
						<div class='image'><a deturl='<?=$arItems['DETAIL_PAGE_URL'];?>' <?if($aut==1){echo "href='".$arItems['DETAIL_PAGE_URL']."'";}else{ echo "href='".$arItems['DETAIL_PAGE_URL']."' class=''";}?>><img src='<?=$arItems['PREVIEW_PICTURE']['SRC'];?>' alt='' /></a></div>
						<div class='info'>
							<a deturl='<?=$arItems['DETAIL_PAGE_URL'];?>' <?if($aut==1){echo "href='".$arItems['DETAIL_PAGE_URL']."' class='header'";}else{ echo "href='".$arItems['DETAIL_PAGE_URL']."' class='header'";}?> ><?=$arItems['NAME'];?></a>
							<p><? echo cutStr($arItems['PREVIEW_TEXT']);?></p>
							<a deturl='<?=$arItems['DETAIL_PAGE_URL'];?>' <?if($aut==1){echo "href='".$arItems['DETAIL_PAGE_URL']."' class='btn-more'";}else{ echo "href='".$arItems['DETAIL_PAGE_URL']."' class=' btn-more'";}?> >Подробнее</a>
						</div>
					</li>
<?}?>		
	</ul>
	<input type="hidden"  id="URAD" URAD="1" >
			</div>
			<script>			
			function urad1(){
				$(".luitop a").each(function(){
					var cls=$(this).attr('deturl');
					$(this).attr('href',cls);
					$(this).removeClass('login_open');
				});
				$("#col_all_prodk").removeClass('login_open');
				var urk=$("#col_all_prodk").attr('deturl');
				$("#col_all_prodk").attr('href',urk);
			}
			</script>
		</div>
	</div>
<div class='clear'></div>
</div>
