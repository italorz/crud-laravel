<?php

namespace App\Http\Controllers;

use App\Models\Corretor;
use Illuminate\Http\Request;

class CorretorController extends Controller
{
    public function index()
    {
        $corretores = Corretor::all();
        return view('corretores.index', compact('corretores'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cpf' => 'required',
            'creci' => 'required',
        ]);

        Corretor::create($request->all());
        return redirect()->route('corretores.index')
                         ->with('success', 'Os dados foram cadastrados com sucesso.');
    }

    public function edit($id)
    {
        $corretor = Corretor::findOrFail($id);
        return view('corretores.edit', compact('corretor'));
    }


    public function update(Request $request, $id)
    {
        $corretor = Corretor::findOrFail($id);


        $validatedData = $request->validate([
            'name' => 'required',
            'cpf' => 'required',
            'creci' => 'required',
        ]);


        $corretor->update($validatedData);


        return redirect()->route('corretores.index')->with('success', 'Os dados foram Alterados com sucesso.');
    }

    public function destroy($id)
{
    $corretor = Corretor::findOrFail($id);

    $corretor->delete();

    return redirect()->route('corretores.index')
                     ->with('success', 'Os dados foram excluídos com sucesso.');
}


}
