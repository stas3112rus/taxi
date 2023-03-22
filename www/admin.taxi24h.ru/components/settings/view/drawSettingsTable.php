<?
function drawSettingsTable()
{
?>
    <table class='table table-striped'>
        <tbody>
            <? drawFormChangePassword() ?>
            <? drawFormDeleteDomains() ?>
            <? drawFormDeployDomains() ?>
        </tbody>
    </table>

<?
}

function drawFormChangePassword()
{
?>
    <form method="post">
        <tr>
            <th scope='row'>
                <label for="password">Изменить пароль</label>
                <input type="text" value="" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Пароль" required>

            </th>
            <th scope='row' class="buttons">
                <div class="buttons__block">
                    <input type="hidden" name="type" value="changePassword">
                    <input class="btn btn-primary" type="submit" value="Изменить пароль">
                </div>
            </th>
        </tr>
    </form>
<?
}

function drawFormDeleteDomains()
{
?>
    <form method="post">
        <tr>
            <th scope='row'>
                <h3>Удалить домены и поддомены</h3>
            </th>
            <th scope='row' class="buttons">
                <div class="buttons__block">
                    <input type="hidden" name="type" value="deleteDomains">
                    <input class="btn btn-danger" type="submit" value="Удалить домены и поддомены">
                </div>
            </th>
        </tr>
    </form>
<?
}

function drawFormDeployDomains()
{
?>
    <form method="post">
        <tr>
            <th scope='row'>
                <h3>Пересобрать все домены и поддомены</h3>
            </th>
            <th scope='row' class="buttons">
                <div class="buttons__block">
                    <input type="hidden" name="type" value="deployDomains">
                    <input class="btn btn-success" type="submit" value="Пуск!">
                </div>
            </th>
        </tr>
    </form>
<?
}

