<?php

namespace App\Http\Controllers;

use App\Models\Town;
use App\Models\Hotel;
use Illuminate\Http\Request;


class TownController extends Controller
{

    public function index()
    {
        $ciudades = Town::all();
        return view('admin.ciudades.index', ['ciudades' => $ciudades]);
    }

    public function galeria()
    {
        $ciudades = Town::all();
        return view('user.ciudades.index', ['ciudades' => $ciudades]);
    }


    public function create()
    {
        return view('admin.ciudades.create');
    }


    public function store(Request $request)
    {

        $ciudad = Town::create($request->all());
        $this->uploadImage($ciudad);
        return redirect()->route('admin.ciudades.index');


    }


    public function show($id)
    {
       $hoteles = Hotel::where('id_ciudad', $id)->get();
       return view('user.ciudades.show', compact('hoteles'));
    }


    public function edit(Town $ciudad)
    {
        return view('admin.ciudades.edit', ["ciudad" => $ciudad]);
    }

    public function update(Request $request, Town $ciudad)
    {
        $this->uploadImage($ciudad);
        $ciudad->update([
            "id" => $request->input('id'),
            "nombre" => $request->input('nombre'),

        ]);
        return redirect()->route('admin.ciudades.index');

    }

    public function destroy(Town $ciudad)
    {
        $ciudad->delete();
        return redirect()->back();
    }




    private function uploadImage($ciudad)
    {
        if(request()->hasFile('imagen')){
            $image = request()->file('imagen');        
            $ciudad->images()->create([
                'path' => $image->store('img/ciudades'),
                'original_name' => $image->getClientOriginalName(),
            ]);
        }

    }
}
