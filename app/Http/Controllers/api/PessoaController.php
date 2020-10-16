<?php

namespace App\Http\Controllers\api;

use App\Models\Pessoa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PessoaController extends Controller
{

    public function index()
    {
        //dd('index');
        return Pessoa::all();
    }

    public function store(Request $request)
    {
        //dd('store');
        Pessoa::create($request->all());
    }

    public function show($id)
    {
        //dd('show');
        return Pessoa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        //dd('update');
        $carro = Pessoa::findOrFail($id);
        $carro->update($request->all());
    }

    public function destroy($id)
    {
        //dd('destroy');
        $carro = Pessoa::findOrFail($id);
        $carro->delete();
    }
}
