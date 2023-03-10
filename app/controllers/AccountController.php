<?php

namespace app\controllers;

use app\core\Controller;

class AccountController extends Controller
{
   public function loginAction()
   {
      //! Если форма не пустая. Короче надо в отдельный метод вывести и проверки и т.д.
      if (!empty($_POST)) {
         $userlogin = trim(filter_var($_POST['userLogin'], FILTER_SANITIZE_SPECIAL_CHARS));
         if (strlen($userlogin) > 3) {
            $this->view->redirectAJAX('/account/register');
         }
         $this->view->message('Succsess', 200);
      }
      //echo 'Страница входа';
      $this->view->render('Вход');
   }

   public function registerAction()
   {
      //echo 'Страница регистрации.';
      $this->view->render('Регистрация');
   }
}
