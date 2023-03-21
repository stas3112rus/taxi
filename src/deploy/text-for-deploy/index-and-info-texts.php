<?
function getInfoTxt($id)
{
    return ('<?
    $CITY_FROM_ID = ' . $id . ';');
}

function getIndexTxt($is_main = false)
{
    $text_type = $is_main ?  1 : 3;

    return ('<?
        include ("' . getPathToInfoFile() . '");
        include ("' . getPathToMainFile() . '");
        $TEXT_TYPE_INDEX = ' . $text_type . ';
        ');
}

function getDirectionTxt($city_to_id, $is_main = false)
{
    $text_type = $is_main ?  2 : 4;

    return ('<?
    include ("' . getPathToInfoFile(1) . '");
    include ("' . getPathToMainFile(1) . '");    
    $CITY_TO_ID = ' . $city_to_id . ';
    $TEXT_TYPE_INDEX = ' . $text_type  . ';
    ');
}

function getTransferTxt($city_to_id)
{
    return ('<?
    include ("' . getPathToInfoFile(1) . '");
    include ("' . getPathToMainFile(1) . '");    
    $CITY_TO_ID = ' . $city_to_id . ';
    $TEXT_TYPE_INDEX = 5;
    ');
}
