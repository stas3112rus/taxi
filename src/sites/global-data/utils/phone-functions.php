<?
function getFullPhone()
{

    global $DEFAULT;

    $result = "";

    for ($i = 0; $i < strlen($DEFAULT['phone']); $i++) {
        if ($i == 2)
            $result .= " (";
        if ($i == 5)
            $result .= ") ";
        if ($i == 8 || $i == 10)
            $result .= "-";

        $result .= $DEFAULT['phone'][$i];
    }

    return $result;
}

function getPhoneWithoutPlus()
{
    global $DEFAULT;

    return str_replace('+', '', $DEFAULT['phone']);
}
