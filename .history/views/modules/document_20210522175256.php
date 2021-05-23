<?php 
require_once './models/Roles.dao.php' ?>
<div class="table-container">
		<div class="table-responsive">
			<table class="table custom-table m-0">
                <tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Identificacion</th>
			<th>Tel.Fijo</th>
			<th>Celular</th>
			<th>Direccion</th>
			<th>Correo</th>
			<th colspan="3">Opciones</th>
		</tr>
		<?php foreach (RolesDAO::listarDatos() as $fila) { ?>
			<tr>
				<td><?= $fila[1] ?></td>
				<td><?= $fila[2] ?></td>
				<td><?= $fila[3] ?></td>
				<td><?= $fila[4] ?></td>
				<td><?= $fila[5] ?></td>
				<td><?= $fila[6] ?></td>
				<td><?= $fila[7] ?></td>
				<td>
													<div class="td-actions">
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Adicionar">
															<i class="icon-circle-with-plus"></i>
														</a>
														<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="Guardar">
															<i class="icon-save"></i>
														</a>
														<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Eliminar">
															<i class="icon-cancel"></i>
														</a>
													</div>
												</td>
			</tr>
		<?php } ?>
										
										</tbody>
									</table>
								</div>
							</div>