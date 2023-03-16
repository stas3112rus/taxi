<?
    include ('../../src/data/mysql.php');
    include('./components/authorization/utils/functions.php');
    include ('../../src/data/user/functions.php');
    include ('./constants/routs.php');

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];


    if (isUserExist($user_name)) {
        $user = getUserByName($user_name);
       
        if(password_verify($password, $user['password'])){
           if (updatePassword($user, $password) != "OK"){
            flash("Ошибка при обновлении пароля в базу данных");
           }

        $_SESSION['id_user'] = $user['id_user'];
        header("Location: ". $routs["cities"]);
        die;

        } else {
            flash('Пароль не верен');
            header('Location: ./');
            die; 
        }

    } else {
        flash('Пользователь с такими данными не зарегистрирован');
        header('Location: ./');
        die; 
    }
