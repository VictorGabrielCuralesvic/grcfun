@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Listar Funcionários</span>
            <span class="ms-auto">
                <a href="{{ route('user.create') }}" class="btn btn-success btn-sm">Cadastrar</a>
            </span>
        </div>

        <div class="card-body">
            
            <x-alert />

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">ID</th>
                        <th scope="col" class="text-center">Nome</th>
                        <th scope="col" class="text-center">E-mail</th>
                        <th scope="col" class="text-center">CPF</th>
                        <th scope="col" class="text-center">Data de Nascimento</th>
                        <th scope="col" class="text-center">Telefone</th>
                        <th scope="col" class="text-center">Gênero</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->cpf }}</td>
                            <td>{{ $user->data_nascimento }}</td>
                            <td>{{ $user->telefone }}</td>
                            <td>{{ $user->genero }}</td>
                            <td class="text-center">
                                <div class="d-flex gap-2">
                                    <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-primary btn-sm">
                                        Visualizar
                                    </a>
                                    <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-warning btn-sm">
                                        Editar
                                    </a>
                                    <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este funcionário?')" class="btn btn-danger btn-sm">
                                            Apagar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Nenhum usuário cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
