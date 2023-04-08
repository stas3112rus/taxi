<?
function deployDirectionsAndTransfer($city_from, $reverse = false, $transfer = false)
{
    $cities_to = getAllWithoutOneCities('id_city');
    $isNotPublicMainInDirections = isNotPublicMainInDirections();

    foreach ($cities_to as $city_to) {
        if ($city_to['id_city'] == $city_from['id_city']) {
            continue;
        }



        if ($transfer) {
            $data = getDataForTransfer($city_from, $city_to, $reverse);
        } else {
            if ($isNotPublicMainInDirections && $city_to['main_city']) {
                continue;
            }
            $data = getDataForDirection($city_from, $city_to, $reverse);
        }



        $createFolder = createFolder($data['dir_folder']);
        if ($createFolder != "Ok")
            return  $createFolder;

        $crateIndexFile = createFile($data['dir_file'], $data['txt']);
        if ($crateIndexFile != "Ok")
            return $crateIndexFile;
    }

    return "Ok";
}

function getDataForDirection($city_from, $city_to, $reverse)
{
    return [
        'txt' => $reverse ? getDirectionTxt($city_to, $city_from) : getDirectionTxt($city_from, $city_to),
        'dir_folder' => $reverse ?
            getFullPathDirectionFolder($city_to, $city_from) :
            getFullPathDirectionFolder($city_from, $city_to),
        'dir_file' =>  $reverse ?
            getFullPathDirectionFile($city_to, $city_from) :
            getFullPathDirectionFile($city_from, $city_to)
    ];
}

function getDataForTransfer($city_from, $city_to, $reverse)
{
    return [
        'txt' =>  getTransferTxt($reverse ? $city_from['id_city'] :  $city_to['id_city']),
        'dir_folder' => $reverse ?
            getFullPathTransferFolder($city_to, $city_from) :
            getFullPathTransferFolder($city_from, $city_to),
        'dir_file' =>  $reverse ?
            getFullPathTransferFile($city_to, $city_from) :
            getFullPathTransferFile($city_from, $city_to)
    ];
}
