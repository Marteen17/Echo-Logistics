<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    //
    public function index(){
        //$Vehiculos = Vehiculo::all();
        $vehiculos = Vehiculo::where('estado','activo')->orderBy('id', 'desc')->simplepaginate(5);
        return view('vehiculos.index',compact('vehiculos'));
    } 
    public function create(){
        return view('vehiculos.create');
    }

    public function store(Request $request){
        $vehiculos = Vehiculo::create($request->all());
        return redirect()->route('autos.index');
    
    }

    public function edit(string $id){
        $auto = Vehiculo::findOrFail($id);
        return view('vehiculos.edit',compact('auto'));
    }
    public function update(Request $request,string $id){
        $auto = Vehiculo::findOrfail($id);
        $auto->update($request->all());
        return redirect()->route('autos.index');
    }
    public function destroy(string $id){
        $auto = Vehiculo::findOrfail($id);
        $auto->estado='inactivo';
        $auto->save();
        return redirect()->route('autos.index');
    }

}
