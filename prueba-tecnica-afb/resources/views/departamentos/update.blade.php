<form action="{{ route('departamento.update',$departamento->id) }}" method="POST" role="form">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    <div class="card-body">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del departamento" value="{{$departamento->nombre}}" required>
        </div>
    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-secondary" >Cambiar</button>
    </div>
</form>
