<?= $cabecera;?>
<br><br>
<div class="container">	
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Editar datos del usuario</h5>
        <p class="card bg-warning">
            <form method="post" action="<?= base_url('/usuario/actualizar')?>" enctype="multipart/form-data">
                <input type="hidden" name="_id" value="<?=$listar['_id']?>">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input id="nombre" value="<?=$listar['nombre']?>" class="form-control" type="text" name="nombre">
                </div> 
               
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" value="<?=$listar['email']?>" class="form-control" type="text" name="email">
                </div> 
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input id="password" value="<?=$listar['password']?>"class="form-control" type="password" name="password">
                </div> 
                <div class="form-group">
                    <label for="numero">#Telefono:</label>
                    <input id="numero" value="<?=$listar['numero']?>" class="form-control" type="text" name="numero">
                </div> 

              
            <button class="btn btn-success" type="submit">Actualizar</button>
            <a href="<?=base_url('/usuario/listar');?>"class="btn btn-info">cancelar</a>  
            </form>
      
    </div>
</div>
</p>
<?= $pie?>
