<?
include('../../src/data/mysql.php');
include('./components/authorization/utils/functions.php');
include('./constants/routs.php');

checkAuthorizationOnStart($routs["cities"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.min.css">

    <title>Login In</title>
</head>

<body>
    <section class="main">
        <div class="login__wrapper">
            <h1>Authorization</h1>
            <?php flash(); ?>
            <?php include('./components/authorization/forms/authorizationForm.php') ?>
        </div>
    </section>
</body>

</html>