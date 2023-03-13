<?
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$database = "taxi2023";

$base = new mysqli($host, $user, $pass, $database);

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

function isExist($sql): bool{
    global $base;
    $res = $base -> query($sql);
    return( $res -> num_rows > 0);
}
