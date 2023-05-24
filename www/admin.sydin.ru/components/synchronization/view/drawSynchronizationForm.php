<?
function drawSynchronizationForm()
{
?>
    <form method="post">
        <table class='table table-striped'>
            <tbody>
                <tr>
                    <th scope='row' width="20%">
                        Сайт для синхронизации
                    </th>
                    <td colspan="2">
                        <? drawSitesField() ?>
                    </td>
                </tr>
                <tr>
                    <th scope='row'>
                        Синхронизация по городам
                    </th>
                    <td></td>
                    <td>
                        <input class="btn btn-primary btn-synchronization" formaction="./?type=cities" formmethod="post" type="submit" disabled value="Синхронизировать города">
                    </td>
                </tr>
                <tr>
                    <th scope='row'>
                        Синхронизация по городам, где не показываем
                    </th>
                    <td>
                        <select class="form-control" name="not_published_type">
                            <option value="full">Полная синхронизация</option>
                            <option value="add_new_line">Добавить записи направлений, которых нет</option>
                        </select>
                    </td>
                    <td>
                        <input class="btn btn-primary btn-synchronization" formaction="./?type=not_published" formmethod="post" type="submit" disabled value="Синхронизировать непубликуемые направления">
                    </td>
                </tr>
                <tr>
                    <th scope='row'>
                        Синхронизация тарифов
                    </th>
                    <td></td>
                    <td>
                        <input class="btn btn-primary btn-synchronization" formaction="./?type=tariffs" formmethod="post" type="submit" disabled value="Синхронизировать тарифы">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
<?
}

function drawSitesField()
{
    global $SITES_API_ROUTES;

    $domain = getDefaultValueByName('domain');

?>
    <select class="form-control select-site" name="site">
        <option value="">Не выбран</option>
        <?
        foreach ($SITES_API_ROUTES as $sites_name => $sites_option) {
            if ($domain != $sites_name) {
        ?>
                <option value="<? echo $sites_name ?>"><? echo $sites_name ?></option>
        <?
            }
        }
        ?>
    </select>
<?
}
