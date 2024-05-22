@if(!$otrosDepartamentos->isEmpty() && $empleadosAsignados)
<form action="{{ route('departamento.borrar') }}" method="POST" role="form">
    @csrf
    <input name="departamento_id" id="departamento_id" type="hidden" value="{{$departamento->id}}">
    <div class="card-body">
        <h1>Hay empleados que pertenecen a este departamento, por favor reasignelos</h1>
        <div class="form-group col-12">
            <label for="role">Departamento</label>
            <select class="form-control" id="nuevo_departamento_id" name="nuevo_departamento_id" required>
                @foreach($otrosDepartamentos as $departamento)
                    <option value="{{$departamento->id}}">
                        {{$departamento->nombre}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-secondary" >Reasignar y eliminar</button>
    </div>
</form>
@elseif($otrosDepartamentos->isEmpty() && $empleadosAsignados)
    <h1>Este departamento tiene empleados asignados pero no existe otro departamento para reasignar, debe crear uno</h1>
@else
    <form action="{{ route('departamento.borrar') }}" method="POST" role="form">
        @csrf
        <input name="departamento_id" id="departamento_id" type="hidden" value="{{$departamento->id}}">
        <h1>¿Está seguro de eliminar este departamento?</h1>
        <div class="card-footer">
            <button type="submit" class="btn btn-secondary" >Eliminar</button>
        </div>
    </form>
@endif