<?
function drawTabs()
{
	global $DEFAULT;
?>
	<section id="tabs" class="faq section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="carspace-header text-center">
						<div class="title"><? echo $DEFAULT["tabs_title"] ?></div>
					</div>
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
