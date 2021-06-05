<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Headboard</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/headboard.css">
  </head>
  <body>
   <header >
   <img src="../public/fondo1.jpg"/>
   </header>  
   <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
      <a class="navbar-brand" href="<?=base_url('/usuario/index')?>">
      <svg class="bi bi-house-fill" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
      </svg>Iniciar Session</a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
        <ul class="navbar-nav mr-auto" >
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/mensaje/chat')?>">Mesenger
            </a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/usuario/home')?>">home</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/usuario/listar')?>">Usuario</a>
          </li>
        </ul>
         <ul class="navbar-nav my-2 my-lg-0">
         <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/mensaje/listar')?>">Chat</a>
          </li>
         </ul>
   
        <ul class="navbar-nav mr-auto">
          <li class="nav-item  'active' : null) ?>">
            <a class="nav-link" href="<?=base_url('/notification/listar')?>">Notificacion</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item  'active' : null) ?>">
            <a class="nav-link" href="<?=base_url('/usuario/administra')?>">administra</a>
          </li>
        </ul>
      
      </div>
      </div>
    </nav>
    
  </div>
  