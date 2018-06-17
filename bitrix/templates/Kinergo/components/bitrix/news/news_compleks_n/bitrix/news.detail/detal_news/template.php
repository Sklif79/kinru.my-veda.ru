<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

 <?
  $monthes = array('','января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря');
  $dat=$arResult['FIELDS']['DATE_CREATE'];
  $dat=strtotime($dat);
  $day = date("j" ,$dat);
  $month = $monthes[date("n",$dat)];

	$year=date("Y" ,$dat);

  $dat=$day.' '.$month.' '.$year;
  ?>


<div class='content'>
			<div class='design'>
<div class='image'><a href='<?=$arResult['DETAIL_PICTURE']['SRC'];?>' data-lightbox="roadtrip"><img src='<?=$arResult['DETAIL_PICTURE']['SRC'];?>' width="236" alt='' /></a></div>
				<h1><?=$arResult['NAME'];?></h1>


				<span class="date"><?=$dat;?></span>
				<?=$arResult['DETAIL_TEXT'];?>
				</div>

		</div>
		<div class='clear'></div>
	</div>

	
	  
