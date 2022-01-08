<?php
   namespace Charlsdev\Crysslab\controllers;

   use Charlsdev\Crysslab\helpers\Controllers;
   use Charlsdev\Crysslab\models\User;

   class Register extends Controllers
   {
      public function __construct()
      {
         parent::__construct();
      }

      public function register() {
         $cedula = $this->post('cedula');
         $apellidos = $this->post('apellidos');
         $nombres = $this->post('nombres');
         $email = $this->post('email');
         $password = $this->post('password');
         $conf_password = $this->post('conf_password');

         if (
            !\is_null($cedula) &&
            !\is_null($apellidos) &&
            !\is_null($nombres) &&
            !\is_null($email) &&
            !\is_null($password) &&
            !\is_null($conf_password)
         ) {
            if ($password === $conf_password) {
               $user = new User($cedula, $apellidos, $nombres, $email, 'Usuario', $password);

               if (User::exists($cedula)) {
                  // $this->render('errors/index');
                  error_log("Usuario encontrado");
                  \header('location: register');
               } else {
                  if ($user->save()) {
                     error_log("Usuario registrado");
                     \header('location: login');
                  } else {
                     // $this->render('errors/index');
                     error_log("Usuario no registrado");
                     \header('location: login');
                  }
               }
            } else {
               // $this->render('errors/index');
               error_log("Las contraseñas no coinciden");
               \header('location: register');
            }
            
         } else {
            // $this->render('errors/index');
            error_log("Campos vacios o con espacios");
            \header('location: register');
         }
         
      }
   }
   