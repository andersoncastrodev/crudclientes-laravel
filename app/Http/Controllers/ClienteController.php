<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importanto a Classe Cliente 
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index()
    {
        $cliente = Cliente::all()->sortBy('nome');
        //dd($cliente);
        return view('concliente',['cliente'=> $cliente]);
    }

    public function create()
    {
        return view('cadcliente');
    }

    public function store(Request $request)
    {
        Cliente::create([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone
        ]);
        return redirect('/');
    }


    public function show()
    {
        $busca = request('busca');
        if($busca){
            $cliente = Cliente::where([
                ['nome','like','%'.$busca.'%']
            ])->get();
        }else{
            $cliente = Cliente::all()->sortBy('nome');
        }
        return view('concliente',['cliente' => $cliente ]);
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
     //   dd ($cliente);
        return view('edtcliente',['cliente' => $cliente ]);
    }


    public function update(Request $request, $id)
    {
        Cliente::where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'endereco'=>$request->endereco,
            'telefone'=>$request->telefone
        ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('/');
    }
}
