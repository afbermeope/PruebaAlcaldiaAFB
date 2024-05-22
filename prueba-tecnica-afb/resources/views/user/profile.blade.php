@include('mainbar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      @include('messages')
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perfil</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Mi perfil</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Main row -->
            <div class="row">
                <div class="col-md-4">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tus datos de usuario</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('user.update',$user->id) }}" method="POST" role="form" >
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre" required value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label for="contact">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese correo" required value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese contraseña" required>
                            </div>
                            <div class="form-group">
                                <label for="pasword_check">Repetir contraseña</label>
                                <input type="password" class="form-control" id="pasword_check" name="pasword_check" placeholder="Repita contraseña" required  oninput="check(this)">
                            </div>
                        
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-secondary" >Cambiar</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>