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

        /*$validated = $request->validate([
            'txtName' => 'required|string|max:255',
            'txtEmail' => 'required|email|unique:users,email',
            'txtPassword' => 'required|confirmed|min:2',
        ]);
        */


        $user = new User();
        $user->name = $request->txtName;
        $user->email = $request->txtEmail;
        $user -> password = Hash::make($request->txtPassword);        
        $user->created_at = date('Y-m-d');
        $user->updated_at = date('Y-m-d');        
        $user ->save();

        Auth::login($user);

       return redirect('/login')->with('mensagem', 'Usuário adicionado com sucesso!');;
    }

    public function verifyUser(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
    
        if (!Auth::attempt($credentials)) {
            return redirect('/login')->withErrors(['error' => 'Credenciais inválidas.']);
        }
    
        return redirect('/dashboard');
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
    public function destroyApi($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        }
    
        $user->delete();
    
        return response()->json(['message' => 'Usuário deletado com sucesso.']);
    }
    

    public function indexApi()
    {
        $users = User::all(); // Obtém todos os usuários do banco de dados
        return response()->json($users); // Retorna os dados como JSON
    }
    

}


