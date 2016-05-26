<?php

/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 26/05/2016
 * Time: 14:34
 */
class SiteController
{
    public static function actionIndex(){

    }

    public static function actionContacts(){

        if (isset($_POST['submit'])) {

            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';

//            Блок валиации
            $errors = false;

            if (!User::checkName($name)) {
                $errors['name'] = 'Имя должно быть не менее 2 символов';
            }

            if (!User::checkEmail($email)) {
                $errors['email'] = 'Не коректный E-mail';
            }


            if (!$errors) {
                $mail = 'nael_rouz@maol.ru';
                $subject = 'Тема письма';
                $message = 'Тело письма';
                $result = mail($mail,$subject,$message);
                Debug::varDump($result);

            }
        }
        include_once ROOT.'/views/site/contacts.php';
    }



}