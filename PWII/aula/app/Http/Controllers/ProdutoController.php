<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Produto::all();
        //$contatos = Contato::where('Nome','=','NVIDIA GeForce RTX 4090')->get();   
        //$produto = Produto::where('id',9)->get();
        //$produto = Produto::where('id','>=',3)->get();
        //$produto = Produto::where('nome','=','Gigabyte Z790 AORUS XTREME')->get();
        //$produto = Produto::where('id','>',0)->orderBy('nome','desc')->get();
        //$produto = Produto::where('id','>',0)->orderBy('nome','asc')->get();

        return view('Produto',compact('produto'));
    }

    public function indexApi(){
        $produto = Produto::all();
        return $produto;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->txtNome;
        $produto->id_categoria = $request->txtCategoria;
        $produto->descricao = $request->txtDescricao;
        $produto->preco = $request->txtPreco;
        $produto->quantidade_em_estoque = $request->txtQuantidade;
        

        $produto->save();

        return redirect('/produto');
    }

    public function storeApi(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->txtNome;
        $produto->id_categoria = $request->txtCategoria;
        $produto->descricao = $request->txtDescricao;
        $produto->preco = $request->txtPreco;
        $produto->quantidade_em_estoque = $request->txtQuantidade;

        $produto->save();
 
        return response()->json([
             'message'=> 'Produto criado com successo',
             'code'=>200]
        ); 
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
    public function destroyApi($id)
    {
        Produto::where('id',$id)->delete();
 
        return response()->json([
            'message'=> "Produto removido com sucesso",
            'code'=>200]
        );
    }
}
