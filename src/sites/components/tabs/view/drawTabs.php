<?
function drawTabs()
{
	global $DEFAULT;
?>
	<section id="testimonials">
		<hr class="lg">
		<div class="container">
			<h2 class="h1"><? echo $DEFAULT["tabs_title"] ?></h2>
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
