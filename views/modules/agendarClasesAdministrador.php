<?php
 

// Definimos nuestra zona horaria
date_default_timezone_set("America/Santiago");

// incluimos el archivo de funciones
include 'util/funciones.php';

// incluimos el archivo de configuracion
include 'config/config.php';

$base_url='vendor/calendario/';

// Verificamos si se ha enviado el campo con name from
if (isset($_POST['from'])) 
{

    // Si se ha enviado verificamos que no vengan vacios
    if ($_POST['from']!="" AND $_POST['to']!="") 
    {

        // Recibimos el fecha de inicio y la fecha final desde el form
        $Datein                    = date('d/m/Y H:i:s', strtotime($_POST['from']));
        $Datefi                    = date('d/m/Y H:i:s', strtotime($_POST['to']));
        $inicio = _formatear($Datein);
        // y la formateamos con la funcion _formatear

        $final  = _formatear($Datefi);

        // Recibimos el fecha de inicio y la fecha final desde el form
        $orderDate                      = date('d/m/Y H:i:s', strtotime($_POST['from']));
        $inicio_normal = $orderDate;

        // y la formateamos con la funcion _formatear
        $orderDate2                      = date('d/m/Y H:i:s', strtotime($_POST['to']));
        $final_normal  = $orderDate2;

        // Recibimos los demas datos desde el form
        $titulo = evaluar($_POST['title']);

        // y con la funcion evaluar
        $descripcion   = evaluar($_POST['descripcion']);

        // reemplazamos los caracteres no permitidos
        $idInstructor = evaluar($_POST['id_instructor']);

        // insertamos el evento sentencia sql
        $query="INSERT INTO clase VALUES(null,'$titulo','$descripcion','','$idInstructor','$inicio','$final','$inicio_normal','$final_normal')";

        // Ejecutamos nuestra sentencia sql
        $conexion->query($query)or die('<script type="text/javascript">alert("Horario No Disponible ")</script>');


        // Obtenemos el ultimo id insetado
        $im=$conexion->query("SELECT MAX(id) AS id FROM clase");
        $row = $im->fetch_row();  
        $id = trim($row[0]);

        // para generar el link del evento
        $link = "models/descripcion_evento.php?id=$id";

        // y actualizamos su link
        $query="UPDATE clase SET url = '$link' WHERE id = $id";

        // Ejecutamos nuestra sentencia sql
        $conexion->query($query); 

        
        // redireccionamos a nuestro calendario
       // header('Location: '.$_SERVER['REQUEST_URI']);
      
    }
}

?>


    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fonts/style.css">
    <link rel="stylesheet" href="vendor/css/main.css">

    <link rel="stylesheet" href="<?=$base_url?>css/calendar.css">
    <link href="<?=$base_url?>css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?=$base_url?>js/es-ES.js"></script>
    <link rel="stylesheet" href="<?=$base_url?>css/bootstrap-datetimepicker.min.css" />
    <script src="<?=$base_url?>js/jquery.min.js"></script>
        <script src="<?=$base_url?>js/bootstrap.min.js"></script>
    <script src="<?=$base_url?>js/moment.js"></script>
    <script src="<?=$base_url?>js/bootstrap-datetimepicker.js"></script>
    
  
<div class="card">
								<div class="card-header">
									<div class="card-title">
									
									</div>
								</div>
								<div class="card-body">
    <div style="padding-left: 100px;padding-right: 100px;padding-top: 30px">
        <div class="row">
            <!--<div class="page-header"><h4></h4></div>-->
            <div class="pull-left form-inline"><br>
                <div class="btn-group">
                    <button class="btn btn-primary btn-rounded" data-calendar-nav="prev"><i class="fa fa-arrow-left"></i>  </button>
                    <button class="btn " data-calendar-nav="today">Hoy</button>
                    <button class="btn btn-primary btn-rounded" data-calendar-nav="next"><i class="fa fa-arrow-right"></i>  </button>
                </div>
                <div class="btn-group">
                    <button class="btn btn-warning btn-rounded" data-calendar-view="year">A??o</button>
                    <button class="btn btn-warning active btn-rounded" data-calendar-view="month">Mes</button>
                    <button class="btn btn-warning btn-rounded" data-calendar-view="week">Semana</button>
                    <button class="btn btn-warning btn-rounded" data-calendar-view="day">Dia</button>
                </div>
            </div>
            <div class="pull-right form-inline"><br>
                <button class="btn btn-info btn-rounded" data-toggle='modal' data-target='#add_evento'>A??adir Evento</button>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div id="calendar"></div> <!-- Aqui se mostrara nuestro calendario -->
            
        </div>
        <!--ventana modal para el calendario-->
        <div class="modal fade" id="events-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                       <div class="modal-header">
                        <a href="#" data-dismiss="modal" style="float: right;"> <i class="glyphicon glyphicon-remove "></i> </a>
                        <br>
                    </div>
                    <div class="modal-body" style="height: 400px">
                        <p>One fine body&hellip;</p>
                    </div>
                 
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

    <script src="<?=$base_url?>js/underscore-min.js"></script>
    <script src="<?=$base_url?>js/calendar.js"></script>
    <script type="text/javascript">
        (function($){
                //creamos la fecha actual
                var date = new Date();
                var yyyy = date.getFullYear().toString();
                var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
                var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

                //establecemos los valores del calendario
                var options = {

                    // definimos que los agenda se mostraran en ventana modal
                    modal: '#events-modal', 

                        // dentro de un iframe
                        modal_type:'iframe',    

                        //obtenemos los agenda de la base de datos
                        events_source: 'models/obtener_eventos.php', 

                        // mostramos el calendario en el mes
                        view: 'month',             

                        // y dia actual
                        day: yyyy+"-"+mm+"-"+dd,   


                        // definimos el idioma por defecto
                        language: 'es-ES', 

                        //Template de nuestro calendario
                        tmpl_path: '<?=$base_url?>tmpls/', 
                        tmpl_cache: false,


                        // Hora de inicio
                        time_start: '08:00', 

                        // y Hora final de cada dia
                        time_end: '22:00',   

                        // intervalo de tiempo entre las hora, en este caso son 30 minutos
                        time_split: '30',    

                        // Definimos un ancho del 100% a nuestro calendario
                        width: '100%', 

                        onAfterEventsLoad: function(events)
                        {
                            if(!events)
                            {
                                return;
                            }
                            var list = $('#eventlist');
                            list.html('');

                            $.each(events, function(key, val)
                            {
                                $(document.createElement('li'))
                                .html('<a href="' + val.url + '">' + val.titulo + '</a>')
                                .appendTo(list);
                            });
                        },
                        onAfterViewLoad: function(view)
                        {
                            $('#page-header').text(this.getTitle());
                            $('.btn-group button').removeClass('active');
                            $('button[data-calendar-view="' + view + '"]').addClass('active');
                        },
                        classes: {
                            months: {
                                general: 'label'
                            }
                        }
                    };


                // id del div donde se mostrara el calendario
                var calendar = $('#calendar').calendar(options); 

                $('.btn-group button[data-calendar-nav]').each(function()
                {
                    var $this = $(this);
                    $this.click(function()
                    {
                        calendar.navigate($this.data('calendar-nav'));
                    });
                });

                $('.btn-group button[data-calendar-view]').each(function()
                {
                    var $this = $(this);
                    $this.click(function()
                    {
                        calendar.view($this.data('calendar-view'));
                    });
                });

                $('#first_day').change(function()
                {
                    var value = $(this).val();
                    value = value.length ? parseInt(value) : null;
                    calendar.setOptions({first_day: value});
                    calendar.view();
                });
            }(jQuery));
    
        </script>
   

        <div class="modal fade" id="add_evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Agregar nueva clase</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                 <label for="from">Inicio</label>
                 <input type="datetime-local" class="form-control" id="from" name="from">
                  
                      <br>
                     <label for="to">Final</label>  
                     <input type="datetime-local" class="form-control" id="to" name="to">
                    <br>

                    <label for="tipo">Seleccione Instructor</label>
                    <select class="form-control" name="id_instructor" id="tipo">
              
                    <?php
                    $sql="select * from usuario where tipo_usuario_id_tipo_usuario=2";
                    if ($conexion->query($sql)->num_rows)
                    {
                        $resultadoConsulta = $conexion->query($sql);
                        while($row=$resultadoConsulta->fetch_array()) 
                        {
                            echo '<option value="'. $row['id_usuario'].'">'. $row['nombre'].'</option>';
                        }
                    }
                    ?>
                    </select>
                    <br>
                    <label for="title">T??tulo</label>
                    <input type="text" required autocomplete="off" name="title" class="form-control" id="title" placeholder="Introduce un t??tulo">

                    <br>


                    <label for="descripcion">Descripci&oacuten</label>
                    <textarea id="descripcion" name="descripcion" required class="form-control" rows="3"></textarea>
                
                   
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i> Cancelar</button>
                  <button type="submit" class="btn btn-success btn-rounded"><i class="fa fa-check"></i> Agregar</button>
              </form>
               <script type="text/javascript">
                  $("#from").datetimepicker({
                	  format: 'MM/DD/YYYY HH:mm',
                  	 language: 'es',
                   minDate: new Date()
                    });
                   $("#to").datetimepicker({
                	   format: 'MM/DD/YYYY HH:mm',
	               language: 'es',
                    minDate: new Date()
                   });
               </script>     
          </div>
      </div>
  </div>
    </div>
      </div>
</div>


