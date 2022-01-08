<?php

   use Charlsdev\Crysslab\controllers\Home;
   use Charlsdev\Crysslab\controllers\Login;
   use Charlsdev\Crysslab\controllers\Register;

   $router = new \Bramus\Router\Router();

   session_start();

   // Ejecucion de las variables de entorno
   $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/../../.env');
   $dotenv->load();

   // Esta variable es la que contendra los datos del usuario en sesión
   $user = unserialize($_SESSION['user']);
   
   $router->get('/login', function() { 
      $controllers = new Login;
      $controllers->render('login/index');
   });

   $router->post('/login', function() { 
      $controllers = new Login;
      $controllers->auth($_POST);
   });

   $router->get('/register', function() { 
      $controllers = new Register;
      $controllers->render('register/index');
   });

   $router->post('/register', function() { 
      $controllers = new Register;
      $controllers->register($_POST);
   });

   $router->get('/home', function() { 
      global $user;
      $controller = new Home($user);
      $controller->index();
   });

   $router->run();