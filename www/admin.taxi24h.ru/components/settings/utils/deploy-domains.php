<?
function deployDomains()
{
    $alert = "";

    $alert .= deleteDomains();

    $copy = copyStaticFilesToAllDomains();

    if ($copy == "Ok") {
        $alert .= drawAlert("Статические файлы скопированы", "alert-success");
    } else {
        $alert .= drawAlert($copy, "alert-danger");
        return;
    }

    $alert .= deployFilesToAllDomains();

    $sitemapDeploy = deploySitemaps();
    if ($sitemapDeploy == "Ok") {
        $alert .= drawAlert("Sitemaps сгенерированы", "alert-success");
    } else {
        $alert .= drawAlert($sitemapDeploy, "alert-danger");
        return;
    }


    return $alert;
}

function deployFilesToAllDomains()
{
    $result = "";

    foreach (getAllCities() as $city) {
        $deploy = deployNewDomain($city);

        if ($deploy == "Ok") {
            $result .= drawAlert($city['im'] . " - деплой успешен", "alert-success");
        } else {
            $result .= drawAlert($deploy, "alert-danger");
        }
    }

    return $result;
}
