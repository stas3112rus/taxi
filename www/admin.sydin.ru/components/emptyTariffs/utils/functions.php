<?
function updateEmptyTariffs($tariff)
{
    $update = updateTariffById($tariff);

    if ($update != 'Ok')
        return drawAlert($update, "alert-danger");
    return drawAlert("Тарифы обновлены", "alert-success");
}
