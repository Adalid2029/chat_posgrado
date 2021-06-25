<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
  <link rel="stylesheet" href="../css/mensaje_crear.css">	
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
            <a class="nav-link" href="<?= base_url('/mensaje/chat')?>">Mesenger</a>
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
<main class="container my-auto">
  <div class="row">
    <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 from-wrapper">
      <div class="container">
        <center><h3>Formulario de Registro</h3></center>
        <hr>
            <form method="post" action="<?= base_url('/mensaje/guardar')?>" enctype="multipart/form-data">
                <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje"class="form-control" type="textarea"name="mensaje"placeholder="Escribe un mensaje aqui"></textarea>
                    </div> 
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <input id="fecha"value="" class="form-control" type="date" name="fecha">
                    </div> 
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="hora">Hora:</label>
                        <input id="hora"value="" class="form-control" type="time" name="hora">
                    </div> 
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_remitente">Remitente:</label>
                        <input id="id_remitente"class="form-control" type="text"name="id_remitente">
                    </div> 
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="id_destinatario">Destinatario:</label>
                        <input id="id_destinatario"class="form-control" type="text"name="id_destinatario">
                    </div> 
                </div>
                
                <div class="col-sm-3">
                <div class="form-group">
                <button class="btn btn-primary"type="submit">Register</button>
                </div>
                </div>
            </form>
        </p>
    </div>
</div>
</div>
</main>
</body>
</html>