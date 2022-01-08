<?php
   namespace Charlsdev\Crysslab\controllers;

   use Charlsdev\Crysslab\helpers\Controllers;
use Charlsdev\Crysslab\models\User;

class Login extends Controllers
   {
      function __construct()
      {
         parent::__construct();
      }

      public function auth() {
         $cedula = $this->post('cedula');
         $password = $this->post('password');

         if (
            !\is_null($cedula) &&
            !\is_null($password)
         ) {
            $user = User::getUserAuth($cedula);
            // \error_log(serialize($user));

            if ($user) {
               if ($user->comparePasswords($password)) {
                  $_SESSION["user"] = serialize($user);

                  \header('location: home');
               } else {
                  error_log("Usuario o contraseña incorrecta");
                  \header('location: login');
               }
            } else {
               error_log("Usuario o contraseña incorrecta");
               \header('location: login');
            }
            
         } else {
            error_log("Campos vacios o con espacios");
            \header('location: login');
         }
      }
   }
   