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
                    <th>Nombre</th>
					<th>Email</th>
					<th>Password</th>
					<th>Numero</th>
		            <th>acciones</th>
                </tr>
            </thead>
			<tbody>
		<?php


foreach ($listar as $usuario):?>
			<tr>
			<td><?php echo $usuario->_id;?></td>
			<td> <?php echo $usuario->nombre;?></td>
			<td> <?php echo $usuario->email;?></td>
			<td> <?php echo $usuario->password;?></td>
			<td> <?php echo $usuario->numero;?></td>

			<td> 
			<a href="editar/<?php echo $usuario->_id?>"class="btn btn-warning" type="button">
			<i class="fas fa-pencil-alt"style="color:#fff"></i>
			</a>
			<a href="borrar/<?php echo $usuario->_id?>"class="btn btn-primary" type="button">
			<i class="fas fa-trash-alt"></i>
			</a>
			
			</td>
			</tr>	
			<?php endforeach;?>
			</tbody>
</table>			
</div>
<?=$pie?>

