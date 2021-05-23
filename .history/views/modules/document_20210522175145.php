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
										<thead>
											<tr>
												<th>Nro.</th>
												<th>Nombre</th>
												<th>Apellido</th>
												<th>No. Documento</th>
												<th>Foto</th>
												<th>Fotocopia Documento</th>
												<th>Hoja de Vida</th>
                                                <th>Acciones</th>
											</tr>
										</thead>
										<tbody>
											
											<tr>
												<td>1. USA</td>
												<td>327</td>
												<td>229</td>
												<td>$139.85</td>
												<td>21.55%</td>
												<td>USD 980</td>
                                                <td>USD 980</td>
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
											<tr>
												<td>2. India</td>
												<td>578</td>
												<td>375</td>
												<td>$89,319</td>
												<td>46.90%</td>
												<td>USD 887</td>
                                                <td>USD 887</td>
												<td>
													<div class="td-actions">
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Add Row">
															<i class="icon-circle-with-plus"></i>
														</a>
														<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="Save Row">
															<i class="icon-save"></i>
														</a>
														<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Delete Row">
															<i class="icon-cancel"></i>
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>3. Australia</td>
												<td>126</td>
												<td>845</td>
												<td>$68.00</td>
												<td>16.25%</td>
												<td>USD 685</td>
                                                <td>USD 685</td>
												<td>
													<div class="td-actions">
														<a href="#" class="icon red" data-toggle="tooltip" data-placement="top" title="Add Row">
															<i class="icon-circle-with-plus"></i>
														</a>
														<a href="#" class="icon green" data-toggle="tooltip" data-placement="top" title="Save Row">
															<i class="icon-save"></i>
														</a>
														<a href="#" class="icon blue" data-toggle="tooltip" data-placement="top" title="Delete Row">
															<i class="icon-cancel"></i>
														</a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>