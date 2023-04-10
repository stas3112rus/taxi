<?
    function copyCityWithoutMain($city){
        $city['main_city'] = false;

        return $city;
    }