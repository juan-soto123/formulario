<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form method="post">
        
         <h2>bienvenido </h2>
         <p>inicia tu registro</p>
         <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="assets/images/name.svg" alt="">
         </div>

         <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="assets/images/email.svg" alt="">
         </div>

         <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Direccion">
            <img class="input-icon" src="assets/images/direction.svg" alt="">
         </div>

         <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class="input-icon" src="assets/images/phone.svg" alt="">
        </div>

            <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="assets/images/password.svg" alt="">
         </div>

         <input class="btn" type="submit" name="register" value="Enviar">
         </form>

         <?php 
         include("registrar.php");
         ?>
</body>

</body>
</html>