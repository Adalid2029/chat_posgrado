<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/usuario_crear.css">
             
</head>
<body>
<header >
    <div class="template"> 
    <a href="<?=base_url('/usuario/login');?>"class="btn btn-primary">Ingresar
    <svg class="bi bi-box-arrow-in-right"fill="white" class="bi bi-box-arrow-in-right" viewBox="0 0 16 14">
    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
    </svg>
    </a>  
    <a href="<?=base_url('/usuario/crear');?>"class="btn btn-primary">Registrar
    <svg class="bi bi-person-fill" fill="white" class="bi bi-person-fill" viewBox="0 0 16 13">
    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    </svg></a>
    <p>
    <a href="<?= base_url('/usuario/index')?>"class="btn btn-primary">Inicio Chat</a>
    </p>
    
    </div>
    
</header>

<main class="container my-auto">
  <div class="row">
    <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 from-wrapper">
      <div class="container">
        <center><h3>Formulario de Registro</h3></center>
        <hr>
            <form method="post" action="<?= base_url('/usuario/guardar')?>" enctype="multipart/form-data">
            <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input id="nombre"value="" class="form-control" type="text" name="nombre"placeholder="Ingrese un nombre">
                </div> 
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email"value="" class="form-control" type="text" name="email"placeholder="Ingrese un correo">
                </div> 
            </div> 
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="password">Clave:</label>
                    <input id="password"value="" class="form-control" type="password" name="password"placeholder="Ingrese una clave">
            </div> 
                </div> 
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="numero">Telefono:</label>
                    <input id="numero"value="" class="form-control" type="number" name="numero"placeholder="Ingrese un numero">
                </div> 
                </div> 
          
                <div class="col-sm-3">
                <div class="form-group">
                <button class="btn btn-primary" type="submit">Registrarse</button>
                </div>
                </div>

            </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
   </main>
</body>
</html>