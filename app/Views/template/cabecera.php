<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Headboard</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
      <link rel="stylesheet" href="../css/headboard.css">
  </head>
  <body>
   <header >
   <img src="../public/fondo1.jpg"/>
   </header>  
   <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
      <a class="navbar-brand" href="<?=base_url('/usuario/index')?>">
      <i class="fas fa-home"></i>Iniciar Session</a>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
        <ul class="navbar-nav mr-auto" >
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/mensaje/chat')?>">Mensage</a>
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
              
      </div>
      </div>
    </nav>
    
  </div>
  