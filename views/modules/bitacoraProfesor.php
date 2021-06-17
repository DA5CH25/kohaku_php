<?php
	require_once './models/Roles.dao.php' ;
	date_default_timezone_set ( "America/Bogota" );
	$fechaActual = date("Y-m-d");
	if(isset($_POST['anotacion']) && $_POST['anotacion']!=""){
		require_once "./controllers/controllerRegister.php";
		$register = new controllerRegister();
		$url = $register->add_bitacora_controller();
	}

?>
				
                <!-- Main container start -->
				<div class="main-container">


					<!-- Row ends -->
                    
					<!-- Row starts -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

							<div class="card">
								<div class="card-body">

									<div class="card-title"><h4>Opciones de busqueda </h4></div>
										<div class="row gutters">
											<div class="col-xl-5 col-lglg-5 col-md-5 col-sm-12 col-12">
												<h6>Busqueda de alumnos</h6>
												<div class="form-group">
													<div class="input-group">							
														<form class="input-group" method="POST">
															<input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
															<div class="input-group-append" id="button-addon4">			
																	<input type = "hidden" name="visualList" value="1"/>
																	<button class="btn btn-primary" type="submit" data-toggle="tooltip" data-placement="top" title="Buscar alumno"><span class="icon-search"></span></button>
																		
															</div>
														</form>
													</div>
												</div>
											</div>
					
											<div class="col-xl-1 col-lglg-1 col-md-1 col-sm-12 col-12">
											<h6><br></h6>
												<form method="POST">
																<input type = "hidden" name="visualList" value="2"/>
																<button class="btn btn-dark" type="submit" data-toggle="tooltip" data-placement="top" title="Listar alumnos"><span class="icon-list2"></span></button>
												</form>	

											</div>

											<div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
												<div class="form-group">
													<h6>Busqueda de clase</h6>
													<div class="custom-date-input">
														
													<div class="input-group">
														<form class="input-group" method="POST">
															<input type="date" class="form-control" min="2021-01-01" max=<?=$fechaActual?> name="fecha"  value=<?=$fechaActual?> />
														
															<div class="input-group-append" id="button-addon4">
																	<input type = "hidden" name="visualList" value="3"/>
																	<button class="btn btn-primary" type="submit" data-toggle="tooltip" data-placement="top" title="Buscar por fecha"><span class="icon-search"></span></button>
																
															</div>
														</form>
													</div>
												</div>
											</div>

										</div>
                                    </div>

                                </div>
							</div>

							<?php
							if (isset($_POST['visualList']) && $_POST['visualList']!=""):
							?>

								<?php
								if ($_POST['visualList']=="1" && isset($_POST['nombre'])):
								?>

									<div class="table-container">
										<div class="t-header"></div>
										<div class="table-responsive">
											<table id="hideSearchExample" class="table custom-table">
												<thead>
												<tr>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Tel.Fijo</th>
													<th>Celular</th>
													<th>Correo</th>
													<th>Bitacora</th>
												</tr>
												</thead>
												<tbody>
													<?php foreach (RolesDAO::list_for_name_model($_POST['nombre']) as $fila) { ?>
														<tr>
															<td><?= $fila[1] ?></td>
															<td><?= $fila[2] ?></td>
															<td><?= $fila[4] ?></td>
															<td><?= $fila[5] ?></td>
															<td><?= $fila[7] ?></td>
															<td>
																<div class="input-group">
																	<form method="POST">
																		<input type = "hidden" name="visualNotes" value="<?php echo $fila[0] ?>" />
																		<input type = "hidden" name="nameNotes" value="<?php echo $fila[1] ?>" />
																		<input type = "hidden" name="nombre" value="<?php echo $_POST['nombre'] ?>" />
																		<input type = "hidden" name="visualList" value="<?php echo $_POST['visualList'] ?>" />
																		<button 
n-primary" type= "submit" data-toggle="tooltip" data-placement="top" title="Agregar una observacion"><span class="icon-book-open"></span></button>
																	</form>
																</div>
															</td>
															
														</tr>
													<?php } ?>
												</tbody>
										</table>
										</div>
									</div>

								<?php endif;
								?>

								<?php
								if ($_POST['visualList']=="2"):
								?>

									<div class="table-container">
										<div class="t-header"></div>
										<div class="table-responsive">
											<table id="hideSearchExample" class="table custom-table">
												<thead>
												<tr>
													<th>Nombre</th>
													<th>Apellido</th>
													<th>Tel.Fijo</th>
													<th>Celular</th>
													<th>Correo</th>
													<th>Bitacora</th>
												</tr>
												</thead>
												<tbody>
													<?php foreach (RolesDAO::listarDatos() as $fila) { ?>
														<tr>
															<td><?= $fila[1] ?></td>
															<td><?= $fila[2] ?></td>
															<td><?= $fila[4] ?></td>
															<td><?= $fila[5] ?></td>
															<td><?= $fila[7] ?></td>
															<td>
																<div class="input-group">
																	<form method="POST">
																		<input type = "hidden" name="visualNotes" value="<?php echo $fila[0] ?>" />
																		<input type = "hidden" name="nameNotes" value="<?php echo $fila[1] ?>" />
																		<input type = "hidden" name="visualList" value="<?php echo $_POST['visualList'] ?>" />
																		<button class="btn btn-primary" type= "submit" data-toggle="tooltip" data-placement="top" title="Agregar una observacion"><span class="icon-book-open"></span></button>
																	</form>
																</div>
															</td>
															
														</tr>
													<?php } ?>
												</tbody>
										</table>
										</div>
									</div>

								<?php endif;
								?>


								<?php
								if ($_POST['visualList']=="3" && isset($_POST['fecha'])):
								?>

									<div class="table-container">
										<div class="t-header"></div>
										<div class="table-responsive">
											<table id="hideSearchExample" class="table custom-table">
												<thead>
												<tr>
													<th>Nombre</th>
													<th>Descripcion</th>
													<th>Fecha inicio</th>
													<th>Fecha fin</th>
													<th>opciones</th>
												</tr>
												</thead>
												<tbody>
													<?php foreach (RolesDAO::list_of_class_model() as $fila) {$validacion =substr($fila[7],6,4)."-".substr($fila[7],3,2)."-".substr($fila[7],0,2);
														if($validacion==$_POST['fecha'] ):?>
														<tr>
															<td><?= $fila[1] ?></td>
															<td><?= $fila[2] ?></td>
															<td><?= $fila[7] ?></td>
															<td><?= $fila[8] ?></td>
															<td>
																<div class="input-group">
																	<form method="POST">
																		<input type = "hidden" name="visualNotes" value="<?php echo $fila[0] ?>" />
																		<input type = "hidden" name="visualList" value="<?php echo $_POST['visualList'] ?>" />
																		<button class="btn btn-primary" type= "submit" data-toggle="tooltip" data-placement="top" title="Agregar una observacion"><span class="icon-book-open"></span></button>
																	</form>
																</div>
															</td>
															
														</tr>
													<?php endif; } ?>
												</tbody>
										</table>
										</div>
									</div>

								<?php endif;
								?>

							<?php endif;
							?>
                            <?php
							if (isset($_POST['visualNotes']) && $_POST['visualNotes']!="" && $_POST['visualNotes']!="0"):
							?>

								<div class="card">
									<div class="card-body">
										<div class="card-title"><h4><?php if (isset($_POST['nameNotes']) && $_POST['nameNotes']!=""){ echo $_POST['nameNotes'];} else{ echo "Nombre del alumno"; }?></h4></div>
										<div class="row gutters">

											<div class="input-group">
												<div class="col-xl-10 col-lglg-10 col-md-10 col-sm-12 col-12">
												<form class="input-group" method="POST">

													<div class="col-xl-10 col-lglg-10 col-md-10 col-sm-12 col-12">
														<h6>Observaciones</h6>
														<div class="form-group">
															<textarea class="form-control" id="message" placeholder="Anotacion" maxlength="140" rows="2" name="anotacion"></textarea>
															<div class="form-text text-muted">
																<p id="characterLeft" class="help-block">140 characters left</p>
															</div>
														</div>
													</div>
													
														<div class="col-xl-2 col-lglg-2 col-md-2" >
															
														<h2><br></h2>

															<input type = "hidden" name="nombre" value="<?php echo $_POST['nombre'] ?>" />
															<input type = "hidden" name="visualList" value="<?php echo $_POST['visualList'] ?>" />
																<input type = "hidden" name="visualNotes" id="visualNotes" value="<?php echo $_POST['visualNotes'] ?>" />
																<input type = "hidden" name="fechaActual" id="fechaActual" value="<?php echo $fechaActual ?>" />
															<button class="btn btn-primary" type="submit"><span class="icon-save2"></span>Guardar</button>
														
														</div>

													</div>

												</form>
												<form method="POST">

														<div class="col-xl-2 col-lglg-2 col-md-2" >
															
															<h2><br></h2>
		
																<input type = "hidden" name="nombre" value="<?php echo $_POST['nombre'] ?>" />
																<input type = "hidden" name="visualList" value="<?php echo $_POST['visualList'] ?>" />
																<input type = "hidden" name="visualNotes" id="visualNotes" value="<?php echo $_POST['visualNotes'] ?>" />
																<input type = "hidden" name="fechaActual" id="fechaActual" value="<?php echo $fechaActual ?>" />
																<button class="btn btn-dark" type="submit"><span class="icon-circle-with-cross"></span>Cancelar</button>
															
														</div>
												</form>
												</div>
											</div>
										</div>
									</div>
								</div>

							<?php endif;
							?>

						</div>
					</div>
					<!-- Row ends -->

				</div>
				<!-- Main container end -->
