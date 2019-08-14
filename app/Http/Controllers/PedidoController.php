<?php

namespace App\Http\Controllers;
use App\Pedido;
use App\Cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cliente_id)
    {
        $pedido = Cliente::find($cliente_id)->pedidos()->get();;
        return view('pedido.index', compact('pedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('pedido.create' , compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'data' => 'required|max:255',
        //     'valor' => 'required|max:15',
        // ]);
        // // dd($validatedData);
        // Pedido::create($validatedData);
        // return redirect(route('cliente.pedido.index'))->with('success', 'Order is successfully saved');

         
        //dd($request);
        $cliente = Cliente::findOrFail($id);
        $validatedData = $request->validate([
            'data' => 'required|max:255',
            'valor' => 'required|max:15'
        ]);
        
        $pedido = new Pedido;
        
        //$pedido = $validatedData;
        $pedido->cliente_id = $id;
        $pedido->data = $request->input('data');
        $pedido->valor = $request->input('valor');
        $pedido->save();
        $cliente->pedidos->push($pedido);
        $cliente->save();
        //Pessoa::whereId($pessoa->id)->update($validatedData);
        return redirect(route('cliente.index'))->with('success', 'is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit($cliente_id, Pedido $pedido)
    {
        return view('pedido.edit', compact('cliente_id', 'pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update($cliente_id, Request $request, Pedido $pedido)
    {
        $validatedData = $request->validate([
            'data' => 'required|max:255',
            'valor' => 'required|max:15',
        ]);
        // dd($validatedData);
        //Pedido::update($validatedData);
        $pedido->data = $request->input('data');
        $pedido->valor = $request->input('valor');
        $pedido->save();
        return redirect(route('cliente.pedido.index', $cliente_id))->with('success', 'Order is successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($cliente_id, Pedido $pedido)
    {
        // $pedido = Pedido::findOrFail($pedido->id);
        $pedido->delete();
        return redirect(route('cliente.pedido.index', $cliente_id))->with('success', 'Order is successfully deleted');
    }
}
