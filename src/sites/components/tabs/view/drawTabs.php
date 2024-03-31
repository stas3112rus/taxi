<?
function drawTabs()
{
	global $DEFAULT;
?>
	<section class="bg-grey features">
		<div class="container text-center">
			<div class="row section-header">
				<h2 class="box-header"><? echo $DEFAULT["tabs_title"] ?></h2>
			</div>
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
	</section>
<?
}

function drawTab($text, $url)
{
?>
	<li class='tabs_item'><a href='<? echo $url ?>'><? echo $text ?></a></li>
<?
}
