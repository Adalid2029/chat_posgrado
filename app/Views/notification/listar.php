<?=$cabecera?>
<div class="container">	
<br><br>
<a href="crear"class="btn btn-primary"  type="button">Nuevo<i class="bi bi-plus"></i>
<i class="fas fa-plus-square"></i>
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
			
			<a href="borrar/<?php echo $notificacion->_id?>"class="btn btn-primary" type="button">
			<i class="fas fa-trash-alt"></i>
		</a>
			
			</td>
			</tr>	
			<?php endforeach;?>
			</tbody>
</table>			
</div>
<?=$pie?>

