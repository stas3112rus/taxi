<?
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$database = "taxi2023";


$base = new mysqli($host, $user, $pass, $database);
$base->set_charset('utf8mb4');

$adminRoute = "http://taxi2023/admin.taxi24h.ru";

$MYSQL_CONSTANTS = [
    'COMMA' => ", ",
    'SEMICOLON' => ";",
    'NULL' => "NULL"
];

function changeDataBaseRequest($sql, $errorMessage)
{
    global $base;
    if ($base->query($sql)) {
        return "Ok";
    } else {
        return "$errorMessage: " . "<br>" . $base->error;
    }
}

function getOneRowFromDataBase($sql)
{
    global $base;
    $res = $base->query($sql);

    return $res->fetch_assoc();
}

function getAllRowsFromDataBase($sql)
{
    global $base;
    $res = $base->query($sql);

    return ($res->fetch_all(MYSQLI_ASSOC));
}

function isExist($sql): bool
{
    global $base;
    $res = $base->query($sql);
    return ($res->num_rows > 0);
}

function trimValues($values)
{
    $result = [];

    foreach ($values as $key => $value) {
        $result[$key] = trim($value);
    }

    return $result;
}

function emptyStringToNull($values)
{
    global $MYSQL_CONSTANTS;
    $result = [];

    foreach ($values as $key => $value) {
        $result[$key] = empty($value) ? $MYSQL_CONSTANTS['NULL'] : $value;
    }

    return $result;
}


