<?
function drawTabs()
{
	global $DEFAULT;
?>
	<section class="advantages content-section6" id="tabs">
		<div class="container">
			<div class="title-black">
				<? echo $DEFAULT["tabs_title"] ?>
			</div>
			<div class="line-orange"></div>
			<div class="row">
				<ul class='tabs_list'>
					<?
					foreach (getTabsValue() as $tab) {
						drawTab($tab['text'], $tab['url']);
					}
					?>
				</ul>
			</div>
		</div>
		<div class=" clear"></div>
	</section>
<?
}

function drawTab($text, $url)
{
?>
	<li class='tabs_item'><a href='<? echo $url ?>'><? echo $text ?></a></li>
<?
}
