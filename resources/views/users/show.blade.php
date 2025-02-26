@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Visualizar Funcionário</span>
            <span class="ms-auto d-sm-flex flex-row">

                <a href="{{ route('user.index') }}" class="btn btn-info btn-sm me-1">Listar</a>

                <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-warning btn-sm me-1">Editar</a>

                <form method="POST" action="{{ route('user.destroy', ['user' => $user->id] )}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este funcionário?')" class="btn btn-danger btn-sm">Apagar</button>
                </form>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <dl class="row g-3">

                <dt class="col-sm-3">ID</dt>
                <dd class="col-sm-9">{{ $user->id }}</dd>

                <dt class="col-sm-3">Nome</dt>
                <dd class="col-sm-9">{{ $user->name }}</dd>

                <dt class="col-sm-3">E-mail</dt>
                <dd class="col-sm-9">{{ $user->email }}</dd>

                <dt class="col-sm-3">CPF</dt>
                <dd class="col-sm-9">{{ $user->cpf }}</dd>

                <dt class="col-sm-3">Data de Nascimento</dt>
                <dd class="col-sm-9">{{ $user->data_nascimento }}</dd>

                <dt class="col-sm-3">Telefone</dt>
                <dd class="col-sm-9">{{ $user->telefone }}</dd>

                <dt class="col-sm-3">Gênero</dt>
                <dd class="col-sm-9">{{ $user->genero }}</dd>

                <dt class="col-sm-3">Contratado</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}</dd>

                <dt class="col-sm-3">Editado</dt>
                <dd class="col-sm-9">{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y') }}</dd>

            </dl>
        </div>    
    </div>    
@endsection
