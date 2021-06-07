<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
        <link rel="stylesheet" href="<?=base_url()?>/css/home.css">    
    </head>
    <body>
    <header >
    <div class="template"> 
    <a href="<?=base_url('/usuario/login');?>"class="btn btn-primary">Salir
    <i class="icono fas fa-sign-out-alt"></i>
    </a>  

    <p>
    <a href="<?= base_url('/usuario/index')?>"class="btn btn-primary">Iniciando Chat</a>
    </p>
    
    </div>
    
<form action="<?=base_url('home/home')?>"method="POST">
<?php $session = session(); ?>
  <div class="container">
  <h1>Bienvenid@</h1>
  <h2><?= $session->nombre?></h2>
  <div class="card-img">
    <img src="../public/usuario.png"/>
  </div>
 
  <label>Usted se a logueado correctamente</label>
	<span>Clic abajo para ingresar al chat</span>
	<a href="<?=base_url('/mensaje/chat');?>" class="btn btn-info">Abre el chat</a>
</div>
</form>
</body>
</html>
