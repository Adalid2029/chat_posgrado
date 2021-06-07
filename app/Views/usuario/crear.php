<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
     <link rel="stylesheet" href="../css/usuario_crear.css">

             
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