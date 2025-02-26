<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        // listar funcionarios
        $users = User::orderByDesc('id')->get();
        // carregar view
        return view('users.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function create()
    {
        // carregar a view
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        // validar o formulário
        $request->validated();

        // cadastrar funcionario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'cpf' => $request->cpf,
            'data_nascimento' => $request->data_nascimento,
            'telefone' => $request->telefone,
            'genero' => $request->genero,
        ]);

        // redirecionar usuário
        return redirect()->route('user.index')->with('success', 'Usuário cadastrado com sucesso');
    }
}
