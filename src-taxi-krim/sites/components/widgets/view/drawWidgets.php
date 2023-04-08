<?
function drawHeaderWidgets(){
    global $WIDGETS_HEADER;
    drawWidget($WIDGETS_HEADER);
}

function drawFooterWidgets(){
    global $WIDGETS_BOTTOM;
    drawWidget($WIDGETS_BOTTOM);
}

function drawWidget($widgets){
    foreach($widgets as $widget){
        echo $widget;
    }
}