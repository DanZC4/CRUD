<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['empleados'] = Empleado::paginate(5);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request = request()->all();\

        $campos = [
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Correo' => 'required|email',
            'Foto' => 'required|max:1000|mimes:jpeg,png,jpg'
        ];

        $message = [
            'required' => 'El :attribute es requerido',
            'Foto.required' => 'la foto requerida'

        ];

        $this->validate($request, $campos, $message);

        $post = request()->except('_token');

        if ($request->hasFile('Foto')) {

            $post['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleado::insert($post);

        // return response()->json($post);

        return redirect('empleado')->with('menssage', 'Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $campos = [
            'Nombre' => 'required|string|max:100',
            'ApellidoPaterno' => 'required|string|max:100',
            'ApellidoMaterno' => 'required|string|max:100',
            'Correo' => 'required|email',

        ];

        $message = [
            'required' => 'El :attribute es requerido',
            'Foto.required' => 'la foto requerida'

        ];
        if ($request->hasFile('Foto')) {

            $campos = ['Foto' => 'required|max:1000|mimes:jpeg,png,jpg'];
            $message = ['Foto.required' => 'la foto requerida'];
        }
        $this->validate($request, $campos, $message);
        $post = request()->except(['_token', '_method']);
        if ($request->hasFile('Foto')) {
            $empleado = Empleado::findOrFail($id);
            Storage::delete('public/' . $empleado->Foto);

            $post['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }

        Empleado::where('id', '=', $id)->update($post);

        $empleado = Empleado::findOrFail($id);


       // return view('empleado.edit', compact('empleado'));

       return redirect('empleado')->with('menssage' , 'the employ was edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $empleado = Empleado::findOrFail($id);

        if (Storage::delete('public/' . $empleado->Foto)) {
            Empleado::destroy($id);
        }

        return redirect('/empleado')->with('menssage', 'Empleado Was Deleted');
    }
}
