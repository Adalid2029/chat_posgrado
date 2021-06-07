<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.11.1/js/all.js"></script>
        <link rel="stylesheet" href="../css/login.css">
            
    </head>
    <body>
    <header >
    <div class="template"> 
    <a href="<?=base_url('/usuario/login');?>"class="btn btn-primary">Ingresar
    <i class="fas fa-sign-in-alt"></i>
    </a>  
    <a href="<?=base_url('/usuario/crear');?>"class="btn btn-primary">Registrar
    <i class="fas fa-user-alt"></i>
    <p>
    <a href="<?= base_url('/usuario/index')?>"class="btn btn-primary">Inicio Chat</a>
    </p>
    
    </div>
    
  
   </header>
        <main class="container ">
            <div class="row">
                <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-12">
                    <h2 class="text-center">Acceder al Sistema</h2>
                    <form action="<?=base_url('login/login')?>"method="POST">
                        <div class="form-group">
                        <b><label for="correo">Email</label>
                            <input name="correo"class="form-control" type="email"placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <b><label for="palabraSecreta">Contraseña</label>
                            <input name="password"class="form-control" type="password"placeholder="Contraseña">
                        </div>
                        <div class="button">
                        <input type="submit" value="Ingresar"class="btn btn-primary"> 
                        </div>
   
                        <br>
                    </form> 
                </div>
            
        </main>

    </body>

</html>

