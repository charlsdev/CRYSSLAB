<?php
   namespace Charlsdev\Crysslab\controllers;

   use Charlsdev\Crysslab\helpers\Controllers;
   use Charlsdev\Crysslab\models\User;

   class Home extends Controllers
   {
      function __construct(private User $user)
      {
         parent::__construct();
      }

      public function index()
      {
         $this->render('home/index', ['user' => $this->user]);
      }
   }