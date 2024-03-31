<?
function drawTabs()
{
	global $DEFAULT;
?>
	<section id="tabs">
		<div class="container">
			<div class="row">
				<div class="title">
					<h5 class="text-center"><? echo $DEFAULT["tabs_title"] ?></h5>
					<div class="col-xs-12 text-center">
					</div>
				</div>
			</div>
			<div class="row valign_wrapper">
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
	<li class='tabs_item'><a href='<? echo $url ?>'><? echo $text ?></li>
<?
}
