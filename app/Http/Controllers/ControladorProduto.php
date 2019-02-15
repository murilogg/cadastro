<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;

class ControladorProduto extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return $produtos->toJson();
    }
    
    public function indexView()
    {
        return view('produtos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Produto();
        $cat->nome = $request->input('nome');
        $cat->estoque = $request->input('estoque');
        $cat->preco = $request->input('preco');
        $cat->categoria_id = $request->input('categoria_id');
        $cat->save();
        //return json_decode($cat);
        return response()->json($cat, 201);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
