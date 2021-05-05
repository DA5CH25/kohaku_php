
<!-- Card Content -->
<div class="card shadow mb-4 ">
	<!-- Card Header - Dropdown -->
	<div
		class="card-header py-3 d-flex flex-row align-items-center justify-content-center">
		<div class="form-group row mb-0">
			<h1 class="h4 mb-0 text-white-800 text-center text-dark">Ver Bitacora Alumno</h1>
		</div>
	</div>

	<!-- Card Body -->
	<div
		class="card-body py-3 d-flex flex-row align-items-center justify-content-center">
		<div class="row">
			<!-- RUTA PARA ENVIAR LOS DATOS AJAX -->
			<form action="<?php echo SERVERURL; ?>ajax/adminAjax.php"
				method="POST" data-form="save" class="FormularioAjax"
				autocomplete="off" enctype="multipart/form-data">




			</form>
		</div>
	</div>
</div>
