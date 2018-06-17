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

function cutStr($str, $lenght = 50, $end = '...', $charset = 'UTF-8', $token = '~') {
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
<div class='right'>
					<span class='cat-name'>
<?
$res = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
if($ar_res = $res->GetNext())
echo "<b>".$ar_res['NAME'];
?> | <? echo $arResult['NAME']."</b>";?></span>
					<div class='cat-image'><img src='<?=$arResult['DETAIL_PICTURE']['SRC'];?>' alt='' /></div>
					
					 <div class="cat_table">
					<table cellpadding='0' cellspacing='0' border='0' class='cat-table'  id='table13' >
					
						<tr>
							<td>№ по картинке</td>
							<td>Изображение</td>
							<td>Краткое описание</td>
							<td>№ по каталогу</td>
							<td>Количество в заказ</td>
						</tr>

								
						<?
							$tab=1;
						foreach ($arResult['ITEMS']	 as $key => $arItems) {?>
				
						<tr class="luitop">
							<td><?echo $arItems['PROPERTIES']['NPICT']['VALUE'];?></td>
							<td>
									<div class='image'>
										<a href='<? echo $arItems['DETAIL_PICTURE']['SRC'];?>' data-lightbox="roadtrip">
<?
$img= $file = CFile::ResizeImageGet($arItems['PREVIEW_PICTURE']['ID'], array('width'=>83, 'height'=>57), BX_RESIZE_IMAGE_PROPORTIONAL, true);  
$img=$img['src'];   
?>
										<img src='<?echo $img; ?>' alt='' />
										</a>
									</div>
							</td>
							<td>
								<? if(count($arItems['DISPLAY_PROPERTIES']['SOVKRB']['VALUE'])!=0){?>	
								<span><?echo cutStr($arItems['PREVIEW_TEXT']);?>
								<span class='tooltip'>Эта запчасть также совместима со следующими коробками:					
									<? foreach ($arItems['DISPLAY_PROPERTIES']['SOVKRB']['VALUE'] as  $arSovkrb){
										$exsp=explode('/', $arSovkrb);
										$nam=str_replace('-','.',$exsp[3]);
									echo "<a href='".$arSovkrb."'>".$nam."</a> ";
								}
								?>
								</span></span>
							<?}else{
								echo cutStr($arItems['PREVIEW_TEXT']);
								}?>

							</td>
							<td>
									<a deturl='<?=$arItems['DETAIL_PAGE_URL'];?>' <?if($aut==1){echo "href='".$arItems['DETAIL_PAGE_URL']."'";}else{ echo "href='".$arItems['DETAIL_PAGE_URL']."' ";}?> >
									<? echo $arItems['PROPERTIES']['NCATALOG']['VALUE'];?>
									</a>
								<? $id=$arItems['ID'];?>

									<span id='vcart_<?=$id?>' class="col-vo">
									<?
									if($_SESSION['LU'][$id]){
										echo "*в корзине ".$_SESSION['LU'][$id]['KOLCH']."шт.";
									}
									?>
									</span>
							</td>
							<td><input type='text' class='input-text' id='colch_<?=$arItems['ID']?>' tabindex="<? echo $tab;$tab++?>" value='0' /></td>
							<input type="hidden" id='tovar_<?=$arItems['ID']?>' 
												 dtpurl='<?=$arItems['DETAIL_PAGE_URL'];?>' 
												 dpisrc='<?=$arItems['DETAIL_PICTURE']['SRC'];?>'
												 dtname='<?=$arItems['NAME']?>'
												nabzapc='<?=$arItems['PROPERTIES']['NCATALOG']['VALUE']?>'>
						</tr>
						<?}?>			
					</table>
					
					</div>
					<div class='cat-tbl-info'>
						<span id='podsk'></span>
						<span id='podsk2'></span>
						<p id='zakazvbasket' <?if($aut==1){ echo " class='btn-zakaz' onclick='lui_cart()'  ";}else{ echo " class='btn-zakaz login_open' "; } ?> >Заказать</p>
					</div>
						<script>
						function lui_cart(){
							var zap='';
							var col=0;
						<?//генерация  скрипта для работы с кoрзиной
								foreach ($arResult['ITEMS']	 as $key => $arItems) {
									$id=$arItems['ID'];
									?>			
									var kolt_<?=$id;?>=$('#colch_<?=$id?>').val();
									kolt_<?=$id;?>=parseInt(kolt_<?=$id;?>.replace(/\D+/g,""));
									if(kolt_<?=$id;?>!=0){
										col+=kolt_<?=$id;?>;
											var sv_1_<?=$id;?>=<?=$id?>;
											var sv_2_<?=$id;?>=$('#tovar_<?=$id?>').attr('dtpurl');
											var sv_3_<?=$id;?>=$('#tovar_<?=$id?>').attr('dpisrc');
											var sv_4_<?=$id;?>=$('#tovar_<?=$id?>').attr('dtname');
											var sv_5_<?=$id;?>=$('#tovar_<?=$id?>').attr('nabzapc');
											zap+=kolt_<?=$arItems['ID']?>+'~'+sv_1_<?=$id;?>+'~'+sv_2_<?=$id;?>+'~'+sv_3_<?=$id;?>+'~'+sv_4_<?=$id;?>+'~'+sv_5_<?=$id;?>+'#';
											$('#colch_<?=$id?>').val(0);
									}
								<?}?>
								// делаем запрос на добвление в ссесию
								function ajaxZap(val){
									// 
									 $.ajax({
										type : "POST",
										url : "http://<?=$_SERVER['HTTP_HOST']?>/bitrix/templates/Kinergo/components/bitrix/ajax_basket.php",
										data : "&LUI="+val,
										success : function(response) {
										$("#podsk2").html(response);
														var imznct=0;
														var s='';
										<?foreach ($arResult['ITEMS']	 as $key => $arItems) {
											$id=$arItems['ID'];
											?>		
													 imznct=$('#otvtsr_<?=$id;?>').attr('kolch');
													if(imznct>0){
														s='*в корзине '+imznct+'шт.';
														$('#vcart_<?=$id;?>').html(s);
													}	
										<?}?>
										var all=$('#LUIAKOL').attr('kolch');
										s='<span>'+all+' запчасти'+'</span>';
										$('#col_all_prodk').html(s);
										}
						});
								}

								if(col!=0){
									var s='*Добавлено в корзину '+col+' запчастей';
									$('#podsk').html(s);
									ajaxZap(zap);
								}
							}
						</script>
						<script>			
			function urad2(){
				$(".luitop a").each(function(){
					var cls=$(this).attr('deturl');
					$(this).attr('href',cls);
					$(this).removeClass('login_open');
				});
				$("#col_all_prodk").removeClass('login_open');
				var urk=$("#col_all_prodk").attr('deturl');
				$("#col_all_prodk").attr('href',urk);

				$("#zakazvbasket").removeClass('login_open');
				$("#zakazvbasket").attr('onclick','lui_cart()');

			}

			$('#table13').keyup(function(e){
 				   if(e.which == 13){
				        lui_cart();
				    }
			});

			$('input').focus(function() {


					 if( $(this).val() == 0 ) {
 								  $(this).val('');
 				  	}

				});

				$("input").blur(function() {
 				   if( $(this).val() == "" ) {
 				       $(this).val(0);
 				   }
				});

			</script>
				
						

				</div>
				<input type="hidden"  id="URAD" URAD="2" >
			</div>
		</div>
		<div class='clear'></div>
	</div>