<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;

class DepartamentoController extends Controller
{/**
     * Muestra la vista inicial del recurso Departamento.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();

        return view('departamentos.index')->with([
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
     * Permite guardar el recurso Departamento en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar los campos a guardar
        $request->validate([
            'nombre' => 'unique:departamentos|string|max:255|required',
        ]);

        try {
            //Uso de eloquent para crear el recurso Departamento
            Departamento::create($request->all());

            return redirect()->route('departamento.index')->with([
                'success' => 'Departamento creado correctamente',
                'error' => ''
            ]);

        } catch (\Throwable $th) {
            return redirect()->route('departamento.index')->with([
                'success' => '',
                'error' => 'Ocurrió un error al crear el departamento',
            ])->withInput();
        }
    }

    /**
     * Mostrar un recurso Departamento en especifico, en este caso por la escaces de campos se decide usar una sola vista
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Muestra la vista para modificar el recurso Departamento
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Uso de eloquent para encontrar el recurso Departamento especifico, indispensable en la vista de edición
        $departamento = Departamento::find($id);

        return view('departamentos.update')->with([
            'departamento'  => $departamento
        ]);
    }

    /**
     * Actualiza un recurso Departamento en especifico en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Obteber el campo nombre en la solicitud
        $nombre = $request->input('nombre');
        //Uso de eloquent para traer el registro del Departamento en especifico
        $departamento = Departamento::find($id);
        //Control de error en caso de no encontrar el recurso Departamento
        if (!$departamento) {
            return redirect()->route('departamentos.index')->with([
                'error' => 'Departamento no encontrado',
            ]);
        }
        //Validar los campos obtenidos del formulario
        $request->validate([
            'nombre' => 'unique:departamentos|string|max:255',
        ]);

        try {
            //Asignacion de nuevo valor al recurso
            $departamento->nombre = $nombre;
            //Uso de eloquent para guardar el nuevo recurso Departamento
            $departamento->save();

            return redirect()->route('departamento.index')->with([
                'success' => 'Departamento actualizado correctamente',
                'error' => ''
            ]);

        } catch (\Throwable $th) {
            return redirect()->route('departamento.index')->with([
                'success' => '',
                'error' => 'Ocurrió un error al actualizar el departamento',
            ])->withInput();
        }
        
    }

    /**
     * Borrar el recurso especifico de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        try {
            $departamento = Departamento::find($request->input('departamento_id'));
            $nuevo_departamento_id = $request->input('nuevo_departamento_id');
            

            
            if($nuevo_departamento_id){
                Empleado::where('departamento_id', $departamento->id)->update(['departamento_id' => $nuevo_departamento_id]);
            }

            $departamento->delete();

            return redirect()->route('departamento.index')->with([
                'success' => 'Departamento eliminado correctamente',
                'error' => ''
            ]);

        } catch (\Throwable $th) {

            dd($th);

            return redirect()->route('departamento.index')->with([
                'error' => 'Ocurrió un error al eliminar el departamento',
            ])->withInput();
        }
    }

    /**
     * Mostrar vista para borrar el recurso especifico de la base de datos.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = Departamento::find($id);
        $otrosDepartamentos = Departamento::where('id', '!=', $id)->get();
        // Verifica si hay empleados asignados a este departamento
        $empleadosAsignados = Empleado::where('departamento_id', $id)->exists();
        return view('departamentos.delete')->with([
            'departamento'  => $departamento,
            'otrosDepartamentos'  => $otrosDepartamentos,
            'empleadosAsignados'  => $empleadosAsignados
        ]);
    }   
}
