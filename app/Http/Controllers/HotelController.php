<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function galeria($id)
    {

        $hoteles = DB::table('hotels')
        ->where('id_ciudad','=', $id)
        ->get();

        return view('user.hoteles.index', ['hoteles' => $hoteles]);
    }

    public function index()
    {
        $hoteles = Hotel::all();
        return view('admin.hoteles.index', ['hoteles' => $hoteles]);
    }

    public function create()
    {
        $ciudades = Town::all();
        return view('admin.hoteles.create', ['ciudades' => $ciudades]);
    }


    public function store(Request $request)
    {
        $hotel = Hotel::create($request->all());
        $this->uploadImage($hotel);
        return redirect()->route('admin.hoteles.index');        
    }

    public function update(Request $request, Hotel $hotel)
    {
        $this->uploadImage($hotel);
        $hotel->update([
            "nombre" => $request->input('nombre'),
            "direccion" => $request->input('direccion'),
            "categoria" => $request->input('categoria'),
            "id_ciudad" => $request->input('id_ciudad'),
            "descripcion" => $request->input('descripcion'),
        ]);
        
        return redirect()->route('admin.hoteles.index');
    }
    
    public function show(Hotel $hotel)
    {
        
        return view('user.hoteles.show', compact('hotel'));
    }

    
    public function edit(Hotel $hotel)
    {
        $categorias = array('1 Estrella','2 Estrellas','3 Estrellas','4 Estrellas','5 Estrellas');
        $ciudades = Town::all();
        return view('admin.hoteles.edit', compact('ciudades', 'hotel', 'categorias'));//Categorias en Plural?
    }




    public function destroy(Hotel $hotel)
    {
        $hotel->delete(); 

        return redirect()->back();

    }

    private function uploadImage($hotel)
    {
        if(request()->hasFile('imagen')){
            $images = request()->file('imagen');

           foreach($images as $image){
                $hotel->images()->create([
                    'path' => $image->store('/img/hoteles'),
                    'original_name' => $image->getClientOriginalName(),
                ]);
            }    
            
        }

    }
}
