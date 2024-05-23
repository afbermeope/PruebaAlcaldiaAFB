@include('mainbar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        @include('messages')
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Empleados</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Empleados</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="modal fade " id="empleadoModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="empleadoModalLabel">Empleado</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="result"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-3">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Agrega a un empleado</h3>
                        </div>
                        <!-- form start -->
                        <form action="/empleado" method="POST">
                            @csrf
                            <div class="card-body row">
                                <div class="form-group col-12">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Ingrese el nombre" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo" name="correo"
                                        placeholder="Ingrese el correo" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="cedula">Cédula</label>
                                    <input type="text" class="form-control" id="cedula" name="cedula"
                                        placeholder="Ingrese la cedula" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        placeholder="Ingrese el teléfono" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="role">Departamento</label>
                                    <select class="form-control" id="departamento_id" name="departamento_id" required>
                                        @foreach($departamentos as $departamento)
                                            <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Agregar</button>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Lista de empleados</h3>
                        </div>
                        <div class="card-body">
                            <table id="empleado-table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Cédula</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Departamento</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleados as $empleado)
                                    <tr>
                                        <td>{{ $empleado->nombre }}</td>
                                        <td>{{ $empleado->cedula }}</td>
                                        <td>{{ $empleado->correo }}</td>
                                        <td>{{ $empleado->telefono }}</td>
                                        <td>{{ $empleado->departamento->nombre }}</td>
                                        <td>
                                            <button class="btn btn-secondary" type="button" onclick="editarEmpleado({{$empleado->id}})">Editar</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger" type="button" onclick="confirmarBorrar({{$empleado->id}})">Eliminar</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- jQuery -->
<script src="/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script>
    $(function () {
      $("#empleado-table").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": [
            {"extend": 'csvHtml5', 
            "exportOptions": {
                "columns": [ 0, ':visible' ]
            }}, 
            {"extend": 'excelHtml5', 
            "exportOptions": {
                "columns": [ 0, ':visible' ]
            }},{"extend": 'pdfHtml5', 
            "exportOptions": {
                "columns": [ 0, ':visible' ]
            }}, "colvis" ],
        "language": {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningún dato disponible en esta tabla",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },     
            "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad",
            },
        },
        
      }).buttons().container().appendTo('#empleado-table_wrapper .col-md-6:eq(0)');
    });
</script>

<script type="text/javascript">
    function editarEmpleado(empleado_id){
 
    let _token   = $('meta[name="csrf-token"]').attr('content');
    var url = '/editarEmpleadoAjax/' + empleado_id;  
    $.ajax({
      url: url,
      type:"GET",
      success:function(response){
        // console.log(response);
        if(response) {
            $("#empleadoModal").modal();
            $("#result").html(response); 
        }
      },
     });
 };
</script>

<script>
      function confirmarBorrar(empleado_id){
      if (confirm("Estas seguro de eliminar") == true) {
          let _token   = $('meta[name="csrf-token"]').attr('content');
          $.ajax({
              url: "{{URL::to('/empleado/')}}"+"/"+empleado_id,
              type: "POST",
              data: {
                  _method: 'delete',
                  _token: _token,
                  empleado_id: empleado_id,
                  action: 'delete'
              },
              success:function(response){
                  if(response) {
                    alert("Eliminado correctamente");
                    document.getElementById('nombre').value = "";
                    document.getElementById('cedula').value = "";
                    document.getElementById('correo').value = "";
                    document.getElementById('telefono').value = "";
                    location.reload();
                  }
              },
          });
      } 
  }
</script>