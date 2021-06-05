<?=$cabecera?>
<div class="container">	
<br><br>
<a href="crear"class="btn btn-primary"  type="button">Nuevo<i class="bi bi-plus"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>

</a>

<br><br>
<table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Notificacion</th>
		            <th>acciones</th>
                </tr>
            </thead>
			<tbody>
		<?php foreach ($listar as $notificacion):?>
			<tr>
			<td> <?php echo $notificacion->_id;?></td>
			<td> <?php echo $notificacion->notificacion;?></td>
			<td> 
			
			<a href="borrar/<?php echo $notificacion->_id?>"class="btn btn-primary" type="button"><i class="bi bi-trash-fill"></i>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
			<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
			</svg>
		</a>
			
			</td>
			</tr>	
			<?php endforeach;?>
			</tbody>
</table>			
</div>
<?=$pie?>

