<?
function drawTabs()
{
	global $DEFAULT;
?>
	<div class="main class-taxi" id="class-taxi">
		<div class="section">
			<div class="section-title">
				<h3><? echo $DEFAULT["tabs_title"] ?></h3>
				<hr class="short">
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
	</div>
<?
}

function drawTab($text, $url)
{
?>
	<li class='tabs_item'><a href='<? echo $url ?>'><? echo $text ?></a></li>
<?
}
