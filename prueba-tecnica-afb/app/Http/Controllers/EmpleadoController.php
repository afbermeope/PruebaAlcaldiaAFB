<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\Models\Departamento;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Muestra la vista inicial del recurso Empleado.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Uso de eloquent para traer la informacion de los empleados y los departamentos
        $empleados = Empleado::all();
        $departamentos = Departamento::all();

        return view('empleados.index')->with([
            'empleados'  => $empleados,
            'departamentos'  => $departamentos,
        ]);
    }

    /**
     * Permite mostrar la vista de la creacion del recurso, en este caso decidí agregarlo en la vista inicial para mejorar la interacción del usuario.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Permite guardar el recurso Empleado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar los campos a guardar
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|unique:empleados|string|max:255',
            'cedula' => 'required|unique:empleados|string|max:255',
            'departamento_id' => 'string|max:255',
        ]);
        
        $empleados = Empleado::all();
        $departamentos = Departamento::all();
        
        try {
            //Uso de eloquent para crear el recurso Departamento
            Empleado::create($request->all());
            return redirect()->route('empleado.index')->with([
                'empleados'  => $empleados,
                'departamentos'  => $departamentos,
                'success' => 'Empleado creado correctamente'
            ]);
        
        } catch (\Throwable $th) {
            return redirect()->route('empleado.index')->with([
                'empleados'  => $empleados,
                'departamentos'  => $departamentos,
                'error' => 'Ocurrió un error al crear el empleado',
            ])->withInput();
        }        
    }

    /**
     * Mostrar un recurso Empleado en especifico, en este caso por la escaces de campos se decide usar una sola vista
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Muestra la vista para modificar el recurso Empleado
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Uso de eloquent para encontrar el recurso Empleado especifico, indispensable en la vista de edición
        $empleado = Empleado::find($id);
        $departamentos = Departamento::all();

        return view('empleados.update')->with([
            'empleado'  => $empleado,
            'departamentos'  => $departamentos
        ]);
    }

    /**
     * Actualiza el recurso Empleado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Usando eloquent para encontrar el empleado
        $empleado = Empleado::find($id);

        if (!$empleado) {
                return redirect()->route('empleado.index')->with([
                'error' => 'Empleado no encontrado',
            ]);
        }

        $request->validate([
        'nombre' => 'required|string|max:255',
        'correo' => [
            'required',
            'string',
            'max:255',
            function ($attribute, $value, $fail) use ($empleado) {
                // Obtiene el valor actual del correo electrónico en la base de datos
                $correoActual = $empleado->correo;
                // Compara el valor actual con el valor enviado en el formulario
                if ($value === $correoActual) {
                    return;
                }
                $existeCorreo = Empleado::where('correo', $value)->exists();
                if ($existeCorreo) {
                    $fail('El correo electrónico ya está en uso.');
                }
            },
        ],
        'cedula' => [
            'required',
            'string',
            'max:255',
            function ($attribute, $value, $fail) use ($empleado) {
                $cedulaActual = $empleado->cedula;
    
                if ($value === $cedulaActual) {
                    return;
                }
                $existeCedula = Empleado::where('cedula', $value)->exists();
                if ($existeCedula) {
                    $fail('La cédula ya está en uso.');
                }
            },
        ],
        'departamento_id' => 'required',
    ]);

    try {
        //Asignacion de los nuevos valores del recurso

        $empleado->nombre = $request->input('nombre');
        $empleado->correo = $request->input('correo');
        $empleado->cedula = $request->input('cedula');
        $empleado->telefono = $request->input('telefono');
        $empleado->departamento_id = $request->input('departamento_id');
        $empleado->save();

        return redirect()->route('empleado.index')->with([
            'success' => 'Empleado actualizado correctamente',
            'error' => ''
        ]);

    } catch (\Throwable $th) {
        return redirect()->route('empleado.index')->with([
            'success' => '',
            'error' => 'Ocurrió un error al actualizar el empleado'
        ]);
    }
}


    /**
     * Borra un recurso en especifico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $empleado = Empleado::find($id);
            if (!$empleado) {
                return redirect()->route('empleado.index')->with('error', 'Empleado no encontrado.');
            }

            $empleado->delete();

            return redirect()->route('empleado.index')->with([
                'empleados'  => $empleados,
                'departamentos'  => $departamentos,
                'success' => 'Empleado elimiando correctamente'
            ]);

        }catch (\Throwable $th) {
            return redirect()->route('empleado.index')->with([
                'error' => 'Ocurrió un error al eliminar el empleado'
            ]);
        }
    }

}
