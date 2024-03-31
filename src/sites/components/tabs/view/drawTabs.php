<?
function drawTabs()
{
	global $DEFAULT;
?>
	<section id="reviews">
		<div class="container">
			<div class="row m-b-40">
				<div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
					<h2><? echo $DEFAULT["tabs_title"] ?></h2>
				</div>
			</div>
			<div class="row">
				<ul class="tabs-list">
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
