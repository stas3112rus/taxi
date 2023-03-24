<?
include('../../../src/data/mysql.php');
include('../../../src/data/text-fields/functions.php');
include('../../../src/data/text/functions.php');
include('data/data.php');

$fields =  upgradeTextFields(getAllTextFields());

$textData = [];

$mainData = setTextArray($text_main, 1);
$mainDirectionData = setTextArray($text_main_direction, 2);
$DomainData = setTextArray($text_domain, 3);
$DomainDirectionData = setTextArray($text_domain_direction, 4);
$transferData = setTextArray($text_transfer, 5);

migrationText($textData);

function upgradeTextFields($fields)
{
  $result = [];

  foreach ($fields as $field) {
    $result[$field['field_name']] = $field['id_text_field'];
  }

  return $result;
}

function setTextArray($values, $text_type_ref)
{
  global $fields;
  global $textData;
 
  foreach ($values as $value) {
    if (!$fields[$value['id']]) {
      return "Нет поля $value[id]";
    }

    $data = [
      'text_field_ref' => $fields[$value['id']],
      'text_type_ref' =>  $text_type_ref,
      'value' => $value['text'],
    ];

    array_push($textData, $data);
  } 
}
