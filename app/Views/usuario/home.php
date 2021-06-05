<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/home.css">    
    </head>
    <body>
    <header >
    <div class="template"> 
    <a href="<?=base_url('/usuario/login');?>"class="btn btn-primary">Salir
    <svg class="bi bi-box-arrow-in-right"fill="white" class="bi bi-box-arrow-in-right" viewBox="0 0 16 14">
    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
    </svg>
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
 <img src="../public/usuario.png"/>
  <label>Usted se a logueado correctamente</label>
	<span>Clic abajo para ingresar al chat</span>
	<a href="<?=base_url('/mensaje/chat');?>" class="btn btn-info">Abre el chat</a>
</div>
</form>
</body>
</html>
