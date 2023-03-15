<?
function getTextValueListByType($texts)
{
    $result = [];

    foreach ($texts as $text) {
        $result[$text['text_field_ref']] = $text['value'];
    }

    return $result;
}

function updateTexts($post)
{
    $delete = deleteTextsByTextType($post['text_type_id']);

    if ($delete != 'Ok') {
        return drawAlert($delete, "alert-danger");
    }

    $dataForTextUpdate = upgradeTextDataPost($post);

    foreach ($dataForTextUpdate as $value) {
        $addText = addText($value);

        if ($addText != 'Ok') {
            return drawAlert($addText, "alert-danger");
        }
    }

    return drawAlert("Виджеты обновлены", "alert-success");
}

function deleteTexts($text_type_id){
    $delete = deleteTextsByTextType($text_type_id);
    if ($delete != 'Ok') {
        return drawAlert($delete, "alert-danger");
    }
    return drawAlert("Тексты удалены", "alert-success");
}

function upgradeTextDataPost($post)
{
    $result = [];

    foreach ($post as $textDataKey => $textDataValue) {
        if ($textDataKey != 'text_type_id') {
            array_push($result, [
                'text_field_id' => $textDataKey,
                'text_type_id' => $post['text_type_id'],
                'value' => $textDataValue
            ]);
        }
    }

    return $result;
}
?>