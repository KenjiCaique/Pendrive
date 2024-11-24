<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
            $categorias = Categoria::all();
            //$categorias = Categoria::where('nome','=','Processadores')->get();
            //$categorias = Categoria::where('id',1)->get();
            //$categorias = Categoria::where('id','>=',3)->get();
            //$categorias = Categoria::where('nome','=','Processadores')->get();
            //$categorias = Categoria::where('id','>',0)->orderBy('nome','desc')->get();
            //$categorias = Categoria::where('id','>',0)->orderBy('nome','asc')->get();

            return view('Categoria',compact('categorias'));
    }

    public function indexApi(){
        $categoria = Categoria::all();
        return $categoria;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Retorna a view com o formulário para criar uma nova categoria
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias = new Categoria();

        $categorias->nome = $request->txtNome;

        $categorias->save();

        return redirect('/categoria');
    }
    public function storeApi(Request $request)
    {
        $categorias = new Categoria();
        $categorias->nome = $request->txtNome;

        $categorias ->save();
 
        return response()->json([
             'message'=> 'Categoria criada com successo',
             'code'=>200]
        ); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\View\View
     */
    public function show(Categoria $categoria)
    {
        // Retorna a view com os detalhes da categoria
        return view('categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\View\View
     */
    public function edit(Categoria $categoria)
    {
        // Retorna a view com o formulário para editar a categoria
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        // Valida e atualiza a categoria
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $categoria->update($request->all());

        // Redireciona para a lista de categorias com uma mensagem de sucesso
        return redirect()->route('categorias.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        // Exclui a categoria
        $categoria->delete();

        // Redireciona para a lista de categorias com uma mensagem de sucesso
        return redirect()->route('categorias.index')->with('success', 'Categoria excluída com sucesso!');
    }
    public function destroyApi($id)
    {
        Categoria::where('id',$id)->delete();
 
        return response()->json([
            'message'=> "Categoria removida com sucesso",
            'code'=>200]
        );
    }
}
