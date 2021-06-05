<?=$cabecera?>
<div class="container">	
<br><br>

<br><br>
<table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Email</th>
					<th>Password</th>
		            <th>acciones</th>
                </tr>
            </thead>
			<tbody>
		<?php foreach ($listar as $administra):?>
			<tr>
			<td> <?php echo $administra->_id;?></td>
			<td> <?php echo $administra->email;?></td>
			<td> <?php echo $administra->password;?></td>
			</td>
			</tr>	
			<?php endforeach;?>
			</tbody>
</table>			
</div>
<?=$pie?>

