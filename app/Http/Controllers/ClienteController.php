<?php
namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'cpf' => 'required|max:15',
            'endereco' => 'required|max:50',
        ]);
        // dd($validatedData);
        Cliente::create($validatedData);
        return redirect(route('cliente.index'))->with('success', 'Client is successfully saved');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $clientes)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $clientes)
    {
        $clientes = Cliente::findOrFail($clientes->id);
        return view('cliente.edit', compact('clientes'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $clientes)
    {
        $validatedData = $request->validate([
                'nome' => 'required|max:255',
                'cpf' => 'required|max:15',
                'endereco' => 'required|max:50',
        ]);
        Cliente::whereId($clientes->id)->update($validatedData);
        return redirect(route('cliente.index'))->with('success', 'Client is successfully saved');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $clientes)
    {
        $clientes = Cliente::findOrFail($clientes->id);
        $clientes->delete();
        return redirect(route('cliente.index'))->with('success', 'Client is successfully deleted');
    }
}