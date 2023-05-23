<?
    function printJsonFromArray($array){
        echo json_encode($array, JSON_FORCE_OBJECT | JSON_UNESCAPED_UNICODE);
    }