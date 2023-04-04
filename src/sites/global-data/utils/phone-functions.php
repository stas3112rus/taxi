<?
function getFullPhone($phone = false)
{
    global $DEFAULT;

    if (!$phone)
        $phone = $DEFAULT['phone'];

    $result = "";

    for ($i = 0; $i < strlen($phone); $i++) {
        if ($i == 2)
            $result .= " (";
        if ($i == 5)
            $result .= ") ";
        if ($i == 8 || $i == 10)
            $result .= "-";

        $result .= $phone[$i];
    }

    return $result;
}
