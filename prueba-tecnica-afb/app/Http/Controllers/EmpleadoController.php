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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        $departamentos = Departamento::all();

        return view('empleados.index')->with([
            'empleados'  => $empleados,
            'departamentos'  => $departamentos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|unique:empleados|string|max:255',
            'cedula' => 'required|unique:empleados|string|max:255',
            'departamento_id' => 'string|max:255',
        ]);
        
        $empleados = Empleado::all();
        $departamentos = Departamento::all();
        
        try {
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $departamentos = Departamento::all();

        return view('empleados.update')->with([
            'empleado'  => $empleado,
            'departamentos'  => $departamentos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
     * Remove the specified resource from storage.
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
