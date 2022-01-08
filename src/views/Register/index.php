<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registro</title>
   </head>

   <body>
      <form action="register" method="post">
         <br><br> <label for="">Cédula</label>
         <input type="text" name="cedula" id="cedula">

         <br><br> <label for="">Nombres</label>
         <input type="text" name="nombres" id="nombres">

         <br><br> <label for="">Apellidos</label>
         <input type="text" name="apellidos" id="apellidos">

         <br><br> <label for="">Email</label>
         <input type="text" name="email" id="email">

         <br><br> <label for="">Contraseña</label>
         <input type="text" name="password" id="password">

         <br><br> <label for="">Confirmar Contraseña</label>
         <input type="text" name="conf_password" id="conf_password">

         <br><br> <input type="submit" value="Guardar">
      </form>
   </body>
</html>