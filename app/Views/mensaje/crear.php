<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/mensaje_crear.css">
  <title>Ci4 WebSocket Chat</title>

	
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
            <a class="nav-link" href="<?= base_url('/mensaje/chat')?>">
            <svg class="bi bi-chat-text-fill"" width="15" height="15" fill="white" class="bi bi-chat-text-fill" viewBox="0 0 16 16">
            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
          </svg>
            </a>
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
                        <label for="nombre">Nombre:</label>
                        <input id="nombre"value="" class="form-control" type="text" name="nombre">
                    </div> 
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <input id="fecha"value="" class="form-control" type="datetime-local" name="fecha">
                    </div> 
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje"class="form-control" type="textarea"name="mensaje"placeholder="Escribe un mensaje aqui"></textarea>
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