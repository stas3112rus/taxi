<?
function copyStaticFilesToDomain($city)
{
    $copy = copy_folder(
        getFullPathToStaticFiles(),
        getFullPathToDomain($city)
    );

    if ($copy != 'Ok') {
        return $copy;
    }

    return "Ok";
}

function copyStaticFilesToAllDomains()
{
    foreach (getAllCities() as $city) {
        $copy = copyStaticFilesToDomain($city);

        if ($copy != 'Ok') {
            return $copy;
        }
    }

    return "Ok";
}
