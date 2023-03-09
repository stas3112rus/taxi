<?

function isAuthorization($base)
{
    return isUserIdInSession() && isUserAuthorizated($base);
}

function checkAuthorization($base)
{
    if (!isAuthorization($base)) {
        flash('Сессия устарела');
        header("Location: ./");
        die;
    }
}

function checkAuthorizationOnStart($base, $route)
{
    if (isAuthorization($base)) {
        header("Location: " . $route);
        die;
    }
}

function isUserIdInSession(): bool
{
    return !!($_SESSION['id_user'] ?? false);
}

function isUserAuthorizated($base): bool
{
    $id = $_SESSION['id_user'];

    $sql = "SELECT 
            *
            FROM `users`
            WHERE `id_user` = '$id'
        ";
    $res = $base->query($sql);

    return ($res->num_rows > 0);
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