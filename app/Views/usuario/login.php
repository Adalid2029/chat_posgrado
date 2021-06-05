<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/login.css">    
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

