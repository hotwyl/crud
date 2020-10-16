<?php

namespace App\Http\Controllers\api;

use App\Models\Carro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarroController extends Controller
{

    public function index()
    {
        //dd('index');
        return Carro::all();
    }

    public function store(Request $request)
    {
        //dd('store');
        Carro::create($request->all());
    }

    public function show($id)
    {
        //dd('show');
        return Carro::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        //dd('update');
        $carro = Carro::findOrFail($id);
        $carro->update($request->all());
    }

    public function destroy($id)
    {
        //dd('destroy');
        $carro = Carro::findOrFail($id);
        $carro->delete();
    }
}
