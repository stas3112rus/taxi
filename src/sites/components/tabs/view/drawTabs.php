<?
function drawTabs()
{
	global $DEFAULT;
?>
	<div class="container-fluid" id="otzivi">
		<div class="container nine_scr">
			<div class="row">
				<div class="col-md-12 text-left six_scr_h3">
					<h3><? echo $DEFAULT["tabs_title"] ?></h3>
				</div>
			</div>
			<div class="row marg_top_90">
				<ul class='tabs_list'>
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
	<li class='tabs_item'><a href='<? echo $url ?>'><? echo $text ?></li>
<?
}
