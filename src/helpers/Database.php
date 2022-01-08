<?php

   namespace Charlsdev\Crysslab\helpers;

   use PDO;
   use PDOException;
   // use Charlsdev\Crysslab\config\Constants;

   class Database{

      private $tipdb;
      private $host;
      private $db;
      private $user;
      private $password;
      private $charset;

      public function __construct(){
         $this->tipdb = $_ENV['TPDB'];
         $this->host = $_ENV['HOST'];
         $this->db = $_ENV['DB'];
         $this->user = $_ENV['USER'];
         $this->password = $_ENV['PASSWORD'];
         $this->charset = $_ENV['CHARSET'];
      }

      function connect(){
         try{
            // ⇝ MySQL (mysql) && PostgreSQL (pgsql)
            $connection = $this->tipdb . ":host=" . $this->host . ";dbname=" . $this->db . ";port=" . $this->charset;

            $options = [
                  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            
            return $pdo;
         }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
         }
      }
   }
