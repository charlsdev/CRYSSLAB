<?php
   // echo "Hello World!!!";
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
   </head>

   <body>
      <form action="login" method="post">
         <br><br> <label for="">Cédula</label>
         <input type="text" name="cedula" id="cedula">

         <br><br> <label for="">Contraseña</label>
         <input type="text" name="password" id="password">

         <br><br> <input type="submit" value="Iniciar Sesion">
      </form>
   </body>
</html>