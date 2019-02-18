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
        return json_decode($cat);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)) {
            return json_encode($prod);
        }
        return response('Produto não encontrado', 404);
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
        $prod = Produto::find($id);
        if(isset($prod)) {
            $prod->nome = $request->input('nome');
            $prod->estoque = $request->input('estoque');
            $prod->preco = $request->input('preco');
            $prod->categoria_id = $request->input('categoria_id');
            $prod->save();
            return json_encode($prod);
        }
        return response('Produto não encontrado', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)) {
            $prod->delete();
            return response('Ok', 200);
        }
        return response('Produto não encontrado', 404);
    }
}
