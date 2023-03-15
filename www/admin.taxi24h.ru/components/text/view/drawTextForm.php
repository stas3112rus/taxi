<?
function drawTextForm($text_type_id)
{
?>
    <form method="post">
        <? drawTextTable($text_type_id) ?>
        <input type="hidden" name="text_type_id" value="<? echo $text_type_id ?>">
        <input class="btn btn-primary" type="submit" value="Обновить">
    </form>
<?
}

function drawTextTable($text_type_id)
{
    $textValueList =  getTextValueListByType(getTextsByType($text_type_id));

?> <table class='table table-striped'>
        <tbody>
            <?
            foreach (getAllTextFields() as $textField) {
                drawTextRow($textField, $textValueList[$textField['id_text_field']]);
            }
            ?>
        </tbody>
    </table>
<?

}

function drawTextRow($textField = [], $textValue = "")
{
?>
    <tr>
        <th scope='row'>
            <label for="text_value">
                <? echo $textField['field_name'] ?>
                <? if ($textField['comment'])
                    echo "($textField[comment])";
                ?>
            </label>
            <textarea class="form-control" name="<? echo $textField['id_text_field'] ?>" id="text_value" rows="3"><? echo $textValue ?></textarea>
        </th>
    </tr>
<?
}
