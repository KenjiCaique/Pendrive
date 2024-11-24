<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;


class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //"chamou" a model
        //$contatos = Contato::all();
        //$contatos = Contato::where('Nome','=','Messias')->get();        
        //$contatos = Contato::where('ID',1)->get();
        //$contatos = Contato::where('ID','>=',3)->get();
        //$contatos = Contato::where('Email','=','amaria@gmail.com')->get();
        //$contatos = Contato::where('ID','>',0)->orderBy('Email','desc')->get();
        //$contatos = Contato::where('ID','>',0)->orderBy('Email','asc')->get();

        //nome da view      //atributo $contatos sem $
        return view('contato',compact('contatos')); 
    }

    public function indexApi(){
        $contato = Contato::all();        
        return $contato;   
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
        $contato = new Contato();
            $contato->Nome = $request->txNome;
            $contato->Email = $request->txEmail;
            $contato->Assunto = $request->txAssunto;
            $contato->Mensagem = $request->txMensagem;

            $contato ->save();

            return redirect('/contato');
    }

    public function storeApi(Request $request)
    {
        $contato = new Contato();
         $contato->Nome = $request->txNome;
         $contato->Email = $request->txEmail;
         $contato->Assunto = $request->txAssunto;
        $contato->mensagem = $request->txMensagem;

        $contato ->save();
 
        return response()->json([
             'message'=> 'Contato criado com successo',
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
        Contato::where('ID',$id)->delete();
 
        return response()->json([
            'message'=> "Contato removido com sucesso",
            'code'=>200]
        );
    }
}
