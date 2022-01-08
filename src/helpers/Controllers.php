<?php
   namespace Charlsdev\Crysslab\helpers;

   class Controllers
   {
      private View $view;

      public function __construct()
      {
         $this->view = new View();
      }

      public function render($nameView, $data = [])
      {
         $this->view->render($nameView, $data);
      }

      protected function post($param)
      {
         if(!isset($_POST[$param])) {
            error_log("POST: No existe el parametro $param" );
            return NULL;
         }
         return $_POST[$param];
      }

      protected function get($param)
      {
         if(!isset($_GET[$param])) {
            error_log("GET: No existe el parametro $param" );
            return NULL;
         }
         return $_GET[$param];
      }
   }
   