<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
        <link rel="stylesheet" href="../css/inicio.css">     
    </head>
    <body>
    <header >
    <div class="template"> 
    <a href="<?=base_url('/usuario/login');?>"class="btn btn-primary">Ingresar
    <i class="icono fas fa-sign-in-alt"></i>
    </a>  
    <a href="<?=base_url('/usuario/crear');?>"class="btn btn-primary">Registrar
    <i class="icono fas fa-user-alt"></i>
    </a>
    <p>
    <a href="<?=base_url('/usuario/index');?>"class="btn btn-primary">Inicio Chat</a>
    </p>  
    </div>
   </header>     
    </body>

</html>

