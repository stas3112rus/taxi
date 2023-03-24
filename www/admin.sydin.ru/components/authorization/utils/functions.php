<?

function isAuthorization()
{
    return isUserIdInSession() && isUserAuthorizated();
}

function checkAuthorization()
{
    if (!isAuthorization()) {
        flash('Сессия устарела');
        header("Location: ./");
        die;
    }
}

function checkAuthorizationOnStart($route)
{
    if (isAuthorization()) {
        header("Location: " . $route);
        die;
    }
}

function isUserIdInSession(): bool
{
    return !!($_SESSION['id_user'] ?? false);
}

function isUserAuthorizated(): bool
{
    $id = $_SESSION['id_user'];

    $sql = "SELECT 
            *
            FROM `users`
            WHERE `id_user` = '$id'
        ";
    return ($sql);
}

function flash(?string $message = null)
{
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
            <div class="alert alert-danger mb-3">
                <?= $_SESSION['flash'] ?>
            </div>
<?php }
        unset($_SESSION['flash']);
    }
}
?>
<?
function checkPassword($password)
{
    $user = getUserByID($_SESSION['id_user']);

    return password_verify($password, $user['password']);
}
