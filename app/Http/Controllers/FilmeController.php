<?php
namespace App\Http\Controllers;
use App\Filme;
use Illuminate\Http\Request;
class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = Filme::all();
        return view('filme.index', compact('filmes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filme.create');
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
            'titulo' => 'required|max:255',
            'data' => 'required|max:15',
            'duracao' => 'required|max:30',
        ]);
        // dd($validatedData);
        Filme::create($validatedData);
        return redirect(route('filme.index'))->with('success', 'Movie is successfully saved');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Filme  $filmes
     * @return \Illuminate\Http\Response
     */
    public function show(Filme $filmes)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filme  $filmes
     * @return \Illuminate\Http\Response
     */
    public function edit(Filme $filmes)
    {
        $filmes = Filme::findOrFail($filmes->id);
        return view('filme.edit', compact('filmes'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filme  $filmes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filme $filmes)
    {
        $validatedData = $request->validate([
                'titulo' => 'required|max:255',
                'data' => 'required|max:15',
                'duracao' => 'required|max:30',
        ]);
        Filme::whereId($filmes->id)->update($validatedData);
        return redirect(route('filme.index'))->with('success', 'Movie is successfully saved');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filme  $filmes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filme $filmes)
    {
        $filmes = Filme::findOrFail($filmes->id);
        $filmes->delete();
        return redirect(route('filme.index'))->with('success', 'Movie is successfully deleted');
    }
}