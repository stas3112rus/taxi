<?
function getInfoTxt($id)
{
    return ('<?
    $CITY_FROM_ID = ' . $id . ';');
}

function getIndexTxt($is_main = false)
{
    $text_type = $is_main ?  1 : 3;
    $is_reverse = $is_main ?  'false' : 'true';

    return ('<?
        $TEXT_TYPE_INDEX = ' . $text_type . ';
        $IS_REVERSE = ' . $is_reverse . ';
        include ("' . getPathToInfoFile() . '");
        include ("' . getPathToMainFile() . '");      
        ');
}

function getDirectionTxt($city_from, $city_to)
{
    $text_type = $city_from['main_city'] ?  2 : 4;
    $is_reverse = $city_from['main_city'] ?  'true' : 'false';

    return ('<?
    $CITY_TO_ID = ' .  $city_to['id_city'] . ';
    $TEXT_TYPE_INDEX = ' . $text_type  . ';
    $IS_REVERSE = ' . $is_reverse . ';
    include ("' . getPathToInfoFile(1) . '");
    include ("' . getPathToMainFile(1) . '");
    ');
}

function getTransferTxt($city_to_id)
{
    return ('<?
    $CITY_TO_ID = ' . $city_to_id . ';
    $TEXT_TYPE_INDEX = 5;
    $IS_REVERSE = false;

    include ("' . getPathToInfoFile(1) . '");
    include ("' . getPathToMainFile(1) . '");    
    ');
}
