<?php

/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 25/05/2016
 * Time: 09:21
 */
class UserController
{

    public function actionLogin()
    {

        if (isset($_POST['submit'])) {


            $li_email = isset($_POST['email']) ? $_POST['email'] : '';
            $li_password = isset($_POST['password']) ? $_POST['password'] : '';

//            Блок валиации
            $errors = false;


            if (!User::checkEmail($li_email)) {
                $li_errors['email'] = 'Не коректный E-mail';
            } else if (
            !User::checkEmailIsExiste($li_email)
            ) {
                $li_errors['email'] = 'Такой E-mail не зарегистрирован';
            }

            if (!User::checkPassword($li_password)) {
                $li_errors['password'] = 'Пароль должен быть не менее 6 символов';
            }
            $userId = User::checkUserData($li_email, $li_password);
            if (!$userId) {
                $li_errors['password'] = 'Пользователя с таким E-mail и паролем не зарегистрировано';
            } else  {
                User::auth($userId);
                //header("Location: /cabinet");
            }
        }

        require_once ROOT . '/views/user/login.php';
        return true;
    }

    public function actionRegister()
    {
        if (isset($_POST['submit'])) {

            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';

//            Блок валиации
            $errors = false;

            if (!User::checkName($name)) {
                $errors['name'] = 'Имя должно быть не менее 2 символов';
            }

            if (!User::checkEmail($email)) {
                $errors['email'] = 'Не коректный E-mail';
            } else if (
            User::checkEmailIsExiste($email)
            ) {
                $errors['email'] = 'Такой E-mail уже есть';
            }

            if (!User::checkPassword($password)) {
                $errors['password'] = 'Пароль должен быть не менее 6 символов';
            }
            if (!$errors) {
                $registeRresult = User::register($name, $email, $password);

            }
        }


        require_once ROOT . '/views/user/register.php';

        return true;
    }
}