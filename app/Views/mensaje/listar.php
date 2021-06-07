<?=$cabecera?>
<div class="container">	
<br><br>
<a href="crear"class="btn btn-primary"  type="button">Nuevo
<i class="fas fa-plus-square"></i>
</a>

<br><br>
<table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Mensaje</th>
					<th>Date</th>
					<th>Time</th>
					<th>Remitente</th>
					<th>Destinatario</th>
		            <th>acciones</th>
                </tr>
            </thead>
			<tbody>
		<?php foreach ($listar as $mensaje):?>
			<tr>
			<td> <?php echo $mensaje->_id;?></td>
			<td> <?php echo $mensaje->mensaje;?></td>
			<td> <?php echo $mensaje->fecha;?></td>
			<td> <?php echo $mensaje->hora;?></td>
			<td> <?php echo $mensaje->id_remitente;?></td>
			<td> <?php echo $mensaje->id_destinatario;?></td>
			<td> 
			<a href="editar/<?php echo $mensaje->_id?>"class="btn btn-warning" type="button">
			<i class="fas fa-pencil-alt"style="color:#fff"></i>
			</a>
			<a href="borrar/<?php echo $mensaje->_id?>"class="btn btn-primary" type="button">
			<i class="fas fa-trash-alt"></i>
			</a>
			
			</td>
			</tr>	
			<?php endforeach;?>
			</tbody>
</table>			
</div>
<?=$pie?>

