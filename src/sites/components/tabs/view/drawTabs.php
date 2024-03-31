<?
function drawTabs()
{
	global $DEFAULT;
?>
	<section id="faq" class="page-section">
		<div class="container">
			<div class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
				<span><? echo $DEFAULT["tabs_title"] ?></span>
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
