<?
function drawMainBlock()
{
    global $TXT;
?>
    <section id="hero_10" class="no-p-t no-p-b">
        <div class="overlay p-t-150 p-b-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 intro-text wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1500ms"">
					
					<h1 class=" m-t-80 text_shadow">
                        <? echo  mb_strtoupper($TXT['main_block_title']) ?>
                        </h1>

                        <p class="sm-title m-b-40 text_shadow">
                            <? echo $TXT['main_block_subtitle'] ?>
                        </p>

                        <a href="#price-table" class="btn btn-secondary white scroll">
                            <? echo mb_strtoupper($TXT['main_block_btn'])  ?>
                        </a>
                    </div>
                    <div class="col-md-5 wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="1500ms">
                        <div id="signup_1" class="signup-form">
                            <h3><? echo mb_strtoupper($TXT['main_block_form_title'])  ?></h3>
                            <? drawTopForm() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?
}
