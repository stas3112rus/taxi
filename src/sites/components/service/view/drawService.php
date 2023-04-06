<?
function  drawServices()
{
    global $TXT;
?>
    <section class="service section-padding" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="carspace-header text-center">
                        <div class="title"><? echo $TXT['services_block_title'] ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <? drawSectionService("clock-o", $TXT['service-title-1'],  $TXT['service-subtitle-1']) ?>
                <? drawSectionService("smile-o", $TXT['service-title-2'],  $TXT['service-subtitle-2']) ?>
                <? drawSectionService("child", $TXT['service-title-3'],  $TXT['service-subtitle-3']) ?>
                <? drawSectionService("suitcase", $TXT['service-title-4'],  $TXT['service-subtitle-4']) ?>
            </div>
        </div>
    </section>
<?
}

function drawSectionService($icon, $title, $subtitle)
{
?>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="carspace-box">
            <div class="carspace-icon">
                <i class="fa fa-<? echo $icon ?>"></i>
            </div>
            <div class="carspace-details">
                <h5><? echo $title ?></h5>
                <p><? echo $subtitle ?></p>
            </div>
        </div>
    </div>
<?
}
