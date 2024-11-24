<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
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
        $user = new User();
        $user->name = "Maria";
        $user->email = "maria@gmail.com";
        $user -> password = Hash::make("123456");        
        $user->created_at = date('Y-m-d');
        $user->updated_at = date('Y-m-d');        
        $user ->save();

        //Auth::login($user);

      // return redirect('/')->with('mensagem', 'Usuário adicionado com sucesso!');;
    }

    public function verifyUser(Request $request){        

        if(!Auth::attempt($request->only(['email','password']))){        
            return redirect('/login');
        }        
        else{
            return redirect('/dashboard');        
        }
    }

    public function logoutUser(Request $request){
        Auth::logout();
        return redirect('/login');  
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
