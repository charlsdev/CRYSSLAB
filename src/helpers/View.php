<?php
   namespace Charlsdev\Crysslab\helpers;

   class View
   {
      function __construct(){

      }

      function render($nombre, $data = []){
         // Esta variable permitira guardar datos para manejarlos desde la vista
         $this->d = $data;

         require 'src/views/' . $nombre . '.php';
      }
   }
   