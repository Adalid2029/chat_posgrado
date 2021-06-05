<?= $cabecera;?>
<br><br>

<div class="container">	
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Editar datos del usuario</h5>
        <p class="card bg-warning">
            <form method="post" action="<?= base_url('/mensaje/actualizar')?>" enctype="multipart/form-data">
                <input type="hidden" name="_id" value="<?=$listar['_id']?>">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input id="nombre"value="<?=$listar['nombre']?>" class="form-control" type="text" name="nombre">
                </div> 
               <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input id="fecha"value="<?=$listar['fecha']?>" class="form-control" type="date" name="fecha">
                </div> 
                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <input id="mensaje" value="<?=$listar['mensaje']?>"class="form-control" type="text"name="mensaje">
                </div>    
            <button class="btn btn-success" type="submit">Actualizar</button>
            <a href="<?=base_url('/mensaje/listar');?>"class="btn btn-info">cancelar</a>  
            </form>
        
    </div>
</div>
</p>
<?= $pie?>
