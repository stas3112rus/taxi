<?
function downLoadTariffs()
{
    $header = array(
        "id_tariff" => "id",
        "cityFrom" => "Город из",
        "cityTo" => "Город Куда",
        "economy" => "Эконом",
        "comfort" => "Комфорт",
        "business" => "Бизнес",
        "minivan" => "Минивэн",
        "vip" => "VIP"
    );

    $tariffs = [];
    array_push($tariffs, $header);

    foreach (getAllTariffsForDownload() as $tariff) {
        array_push($tariffs, $tariff);
    }

    array_to_csv_download($tariffs, "tariffs.csv");

    return drawAlert("CSV файл сгенерирован", "alert-success");
}
