<?php

/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 25/05/2016
 * Time: 14:00
 */
class CabinetController
{
    public function actionIndex(){

        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        include_once ROOT.'/views/cabinet/index.php';
    }

    public function actionEdit(){

        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        $name = isset($_POST['name']) ? $_POST['name'] : $user['name'];
        $password = isset($_POST['password']) ? $_POST['password'] : $user['password'];

        if (isset($_POST['submit'])) {

//            Блок валиации
            $errors = false;

            if (!User::checkName($name)) {
                $errors['name'] = 'Имя должно быть не менее 2 символов';
            }

            if (!User::checkPassword($password)) {
                $errors['password'] = 'Пароль должен быть не менее 6 символов';
            }
            if (!$errors) {
                $editUserDataResult = User::edit($userId, $name, $password);


            }
        }

        include_once ROOT.'/views/cabinet/edit.php';
    }
}