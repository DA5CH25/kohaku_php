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
	<meta charset="utf-8">			
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
								if ($_POST['visualList']=="1" ){
								    $alumnosLista=RolesDAO::listarAlumnosBitacoraPorNombre($_SESSION['userid_sk'],$_POST['nombre']);
								  
								}
								if ($_POST['visualList']=="2" ){
								    $alumnosLista=RolesDAO::listarAlumnosBitacora($_SESSION['userid_sk']);
								}
								if ($_POST['visualList']=="3" ){
								    $alumnosLista=RolesDAO::listarAlumnosBitacoraProFecha($_SESSION['userid_sk'],$_POST['fecha']);
								}
								?>

									<div class="table-container">
										<div class="t-header"></div>
										<div class="table-responsive">
											<table id="hideSearchExample" class="table custom-table">
												<thead>
												<tr>
												    <th>Alumno</th>
													<th>Clase</th>
								                    <th>Correo</th>
								                    <th>Fecha de Clase</th>
								                    <th>Bit&aacutecora</th>
												</tr>
												</thead>
												<tbody>
													<?php foreach ($alumnosLista as $fila) { 
													    $nombreComplatoAlumno=$fila[0] . ' ' . $fila[1];
													    ?>
														<tr>
														   <td><?= $nombreComplatoAlumno ?></td>
															<td><?= $fila[3] ?></td>
															<td><?= $fila[2] ?></td>
															<td><?= $fila[4]?></td>
															
															<td>
																<div class="input-group">
																<?php 
																   echo '<button class="btn btn-primary" type= "button"  data-placement="top" title="Agregar una observacion"  onclick="mostarBitacoraEditar(' . $fila[7] . ', ' . $fila[8] . ',' .
																				$_SESSION['userid_sk'] .',\'' . $nombreComplatoAlumno.'\',\''. $fila[3] .'\')" ><span class="icon-book-open"></span></button>';
                                                                 ?>
                                                                
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
							
							
							
							<!-- Modal -->
									<div class="modal fade" id="bitacoraModal" tabindex="-1" role="dialog" aria-labelledby="customModalTwoLabel" aria-hidden="true">
									 <form class="input-group" method="POST">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
											
												<div class="modal-header">
													<h5 class="modal-title" id="customModalTwoLabel">Crear Bitacora</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													
												    	<input type="hidden"  id="hiddenIdAlumno"  name="hiddenIdAlumno"  ></input>
		                                                <input type="hidden"  id="hiddenIdClase" name="hiddenIdClase" ></input>
		                                                <input type="hidden"  id="hiddenIdProfesor" name="hiddenIdProfesor" ></input>
		                                                <input type = "hidden" name="fechaActual" id="fechaActual" value="<?php echo $fechaActual ?>" />
		                                                <div class="form-group">
															<label  class="col-form-label">Alumno:</label>
															<label class="col-form-label" id="lblNombreAlumno" ></label>
														</div>
														<div class="form-group">
															<label class="col-form-label">Clase: </label>
															<label class="col-form-label" id="lblClase" ></label>
														</div>
	                                                     
														<div class="form-group">
															<label for="recipient-name" class="col-form-label">Bitacora</label>
															<textarea class="form-control" id="anotacion" name="anotacion"	rows="3"></textarea>
														</div>
														
													
												</div>
												<div class="modal-footer custom">
													
													<div class="left-side">
														<button type="button" class="btn btn-link danger" data-dismiss="modal">Cancelar</button>
													</div>
													<div class="divider"></div>
													<div class="right-side">
														<button type="submint"  class="btn btn-link success">Gardar Bitacora</button>
													</div>
												</div>
												
											</div>
										</div>
										</form>
									</div>
							
							<script type="text/javascript">

							 function mostarBitacoraEditar(idAlumno,idClase,idProfesor,nombreAlumno,clase){
						        	document.getElementById('hiddenIdAlumno').value =idAlumno.toString();
						        	document.getElementById('hiddenIdClase').value =idClase.toString();
						        	document.getElementById('hiddenIdProfesor').value =idProfesor.toString();
						        	document.getElementById('lblNombreAlumno').innerHTML=nombreAlumno;
						        	document.getElementById('lblClase').innerHTML=clase;
						        	$('#bitacoraModal').modal('show');
						        }
						    </script>
							
                           

						</div>
					</div>
					<!-- Row ends -->

				</div>
				<!-- Main container end -->
