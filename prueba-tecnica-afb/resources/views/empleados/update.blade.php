<form action="{{ route('empleado.update',$empleado->id) }}" method="POST" role="form">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
    <div class="card-body">
        <div class="form-group col-12">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre"
                placeholder="Ingrese el nombre" required value="{{$empleado->nombre}}">
        </div>
        <div class="form-group col-12">
            <label for="correo">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo"
                placeholder="Ingrese el correo" required value="{{$empleado->correo}}">
        </div>
        <div class="form-group col-12">
            <label for="cedula">Cédula</label>
            <input type="text" class="form-control" id="cedula" name="cedula"
                placeholder="Ingrese la cedula" required value="{{$empleado->cedula}}">
        </div>
        <div class="form-group col-12">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono"
                placeholder="Ingrese el teléfono" required value="{{$empleado->telefono}}">
        </div>
        <div class="form-group col-12">
            <label for="role">Departamento</label>
            <select class="form-control" id="departamento_id" name="departamento_id" required>
                @foreach($departamentos as $departamento)
                    <option value="{{$departamento->id}}" {{$empleado->departamento_id == $departamento->id ? 'selected' : ''}}>
                        {{$departamento->nombre}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-secondary" >Cambiar</button>
    </div>
</form>
