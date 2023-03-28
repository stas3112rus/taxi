<?
function drawAlert($message, $alert_type)
{
    return ("
                <div class='alert $alert_type' role='alert'>
                    $message
                </div>"
    );
}
