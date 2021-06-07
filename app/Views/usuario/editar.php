<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Headboard</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
      <link rel="stylesheet" href="<?=base_url()?>/css/headboard.css">
     
  </head>
  <body>
  <header >
   <img src="<?=base_url()?>/public/fondo1.jpg"/>
   </header>  
   <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
      <a class="navbar-brand" href="<?=base_url('/usuario/index')?>">
      <i class="fas fa-home"></i>Iniciar Session</a>
      
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
  
<main class="container my-auto">
  <div class="row">
    <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 from-wrapper">
      <div class="container">
        <center><h3>Editar Registro</h3></center>
        <hr>
          <form method="post" action="<?= base_url('/usuario/actualizar')?>" enctype="multipart/form-data">
            <input type="hidden" name="_id" value="<?=$listar['_id']?>">
            <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input id="nombre" value="<?=$listar['nombre']?>" class="form-control" type="text" name="nombre">
                </div> 
                </div> 
           
               
                <div class="col-sm-12">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" value="<?=$listar['email']?>" class="form-control" type="text" name="email">
                    </div> 
                </div>  
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" value="<?=$listar['password']?>"class="form-control" type="password" name="password">
                    </div> 
                </div> 
                <div class="col-sm-6">
                <div class="form-group">
                    <label for="numero">#Telefono:</label>
                    <input id="numero" value="<?=$listar['numero']?>" class="form-control" type="text" name="numero">
                </div> 
                </div> 

                <div class="col-sm-3">
                <div class="form-group">
                <button class="btn btn-primary" type="submit">Actualizar</button>
                </div>
                </div>
               
            </div> 
            </form>
            </div>
    </div>
  </div>
  </main>
</body>
</html>