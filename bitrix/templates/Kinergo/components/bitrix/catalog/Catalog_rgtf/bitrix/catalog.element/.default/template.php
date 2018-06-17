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
					<div class='details'>				
						<h1><?echo $arResult['PROPERTIES']['NCATALOG']['VALUE'];?></h1>
						<div class='left-grid'>
							<div class='image'>
							<a href='<?echo $arResult['DETAIL_PICTURE']['SRC'];?>' data-lightbox="roadtrip">
							<img  width="208" src='<?echo $arResult['DETAIL_PICTURE']['SRC'];?>' alt='' />
							</a>
							</div>
								<? if($arResult['PROPERTIES']['FILEPDF']['VALUE']!=''){
										$file_url=CFile::GetPath($arResult['PROPERTIES']['FILEPDF']['VALUE']);								
										?>
										<a href='<?echo $file_url;?>' class='download'><span>скачать PDF</span></a>										
								<?}?>
						</div><div class='right-grid'>
						<p><?echo $arResult['DETAIL_TEXT'];?></p>
							<?
						/* echo '<pre>';
							print_r($arResult['PROPERTIES']['SVFL']);  
						echo '</pre>'; */
						if(count($arResult['PROPERTIES']['SVFL']['VALUE'])>1){?>

					<h2 style='font-size:18px;'>ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</h2>

							<table cellpadding='0' cellspacing='0' border='0' class='tbl-equip'>
					<?
					$i=0;
					foreach ($arResult['PROPERTIES']['SVFL']['VALUE'] as  $val) {?>
						<tr>
							<td><?=$val;?></td>
							<td><?=$arResult['PROPERTIES']['SVFL']['DESCRIPTION'][$i];?></td>
						</tr>
					<?
					$i++;
					}?>
					</table>
					<?	}
						?>
							<table cellpadding='0' cellspacing='0' border='0' id='table131' class='cat-table'>
								<tr>
									<td>№ по каталогу</td>
									<td>Количество в заказ</td>
								</tr>
								<tr>
									<td><?
									$id=$arResult['ID'];
									echo $arResult['PROPERTIES']['NCATALOG']['VALUE'];
									?>
									<span id='vcart_<?=$id?>' class="col-vo">
									<?
									if($_SESSION['LU'][$id]){
										echo "*в корзине ".$_SESSION['LU'][$id]['KOLCH']."шт.";
									}
									?>
									</span>
									</td>
									<td><input type='text' id='colch_<?=$arResult['ID']?>' class='input-text'  value='0' />
									<input type="hidden" id='tovar_<?=$arResult['ID']?>' 
												 dtpurl='<?=$arResult['DETAIL_PAGE_URL'];?>' 
												 dpisrc='<?=$arResult['DETAIL_PICTURE']['SRC'];?>'
												 dtname='<?=$arResult['NAME']?>'
												nabzapc='<?=$arResult['PROPERTIES']['NCATALOG']['VALUE']?>'>
									</td>
								</tr>
							</table>
							<div class='cat-tbl-info'>
								<? if(count($arResult['DISPLAY_PROPERTIES']['SOVKRB']['VALUE'])!=0){?>
								<span>Эта запчасть также совместима со следующими коробками:

								<? foreach ($arResult['DISPLAY_PROPERTIES']['SOVKRB']['VALUE'] as  $arSovkrb){
										$exsp=explode('/', $arSovkrb);

									$nam=str_replace('-','.',$exsp[3]);
									echo "<a href='".$arSovkrb."'>".$nam."</a> ";
								}
								?>
								</span>
								<?}?>

									

								<a id='zakazvbasket' class='btn-zakaz makezakaz_open <?if($aut!=1){ echo "login_open "; }?> ' <?if($aut==1){ echo "  onclick='lui_cart()' ";}?> >Заказать</a>

								<p id='podsk2'></p>
								<p id='podsk'></p>
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
			</script>
				<input type="hidden"  id="URAD" URAD="2" >		
								<script>
										function lui_cart(){
													var zap='';
											var col=0;
											<?$id=$arResult['ID'];?>
									var kolt_<?=$id;?>=$('#colch_<?=$id?>').val();
									kolt_<?=$id;?>=parseInt(kolt_<?=$id;?>.replace(/\D+/g,""));
									if(kolt_<?=$id;?>!=0){
										col+=kolt_<?=$id;?>;
											var sv_1_<?=$id;?>=<?=$id?>;
											var sv_2_<?=$id;?>=$('#tovar_<?=$id?>').attr('dtpurl');
											var sv_3_<?=$id;?>=$('#tovar_<?=$id?>').attr('dpisrc');
											var sv_4_<?=$id;?>=$('#tovar_<?=$id?>').attr('dtname');
											var sv_5_<?=$id;?>=$('#tovar_<?=$id?>').attr('nabzapc');
											zap+=kolt_<?=$arResult['ID']?>+'~'+sv_1_<?=$id;?>+'~'+sv_2_<?=$id;?>+'~'+sv_3_<?=$id;?>+'~'+sv_4_<?=$id;?>+'~'+sv_5_<?=$id;?>+'#';
											$('#colch_<?=$id?>').val(0);
									}
								// делаем запрос на добвление в ссесию
								function ajaxZap(val){
									// 
									 $.ajax({
										type : "POST",
										url : "http://<?=$_SERVER['HTTP_HOST']?>/bitrix/templates/Kinergo/components/bitrix/ajax_basket.php",
										data : "&LUI="+val,
										success : function(response) {
										$("#podsk2").html(response);

										var all=$('#LUIAKOL').attr('kolch');
										s='<span>'+all+' запчасти'+'</span>';
										$('#col_all_prodk').html(s);
										var all2=$('#otvtsr_<?=$id;?>').attr('kolch');
										var s2='*в корзине '+all2+'шт';
										$('#vcart_<?=$id;?>').html(s2);
										}
									});
								}

									if(col!=0){
										var s='*Добавлено в корзину '+col+' запчастей';
										$('#podsk').html(s);
										ajaxZap(zap);
									}
								}


									$('#table131').keyup(function(e){
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
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class='clear'></div>
	</div>

