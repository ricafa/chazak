<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);
        $cliente = new Cliente();
        $cliente->title = $request->title;
        $cliente->body = $request->body;
        $cliente->published_at = $request->published_at;

        $cliente->save();
        return view('clientes.show', compact('cliente'))->with('success','Cliente criado com sucesso!');
    }

    public function show($id)
    {
        $cliente = Cliente::findOrDie($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrDie($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            ]);
        $cliente = Cliente::findOrDie($id);
        $cliente->nome = $request->nome;

        $cliente->save();
        return view('clientes.show', compact('cliente'))->with('success','Cliente alterado com sucesso!');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrDie($id);
        $nome = $cliente->nome;
        $cliente->delete();
        return view('clientes.index')->with('success','Cliente '.$nome.' excluído com sucesso!');
    }
}
