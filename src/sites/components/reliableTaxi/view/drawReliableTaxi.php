<?php
function drawReliableTaxi()
{
    global $TXT;
?>
    <section class="formCapture formCapture-taxi ">
        <div class="container">
            <div class="title-black text_left"><? echo $TXT['reliable_taxi_title'] ?></div>
            <div class="line-orange text_left"></div>
            <div class="subtitle-black text_left"><? echo $TXT['reliable_taxi_subtitle'] ?></div>
            <a href="#order-time" class="popup-modal btn"><? echo $TXT['reliable_taxi_btn'] ?></a>
        </div>
        <div class="clear"></div>
    </section>
<?
}
