<?
function drawTabs()
{
	global $DEFAULT;
?>
	<section id="tabs" class="tabs-section bg1 bg-cover light-text">
		<div class="container">
			<div class="heading">
				<h2><? echo $DEFAULT["tabs_title"] ?></h2>
			</div>

			<ul class="tabs-list">
				<?
				foreach (getTabsValue() as $tab) {
					drawTab($tab['text'], $tab['url']);
				}
				?>
			</ul>
	</section>
<?
}

function drawTab($text, $url)
{
?>
	<li class='tabs_item'><a href='<? echo $url ?>'><? echo $text ?></li>
<?
}
