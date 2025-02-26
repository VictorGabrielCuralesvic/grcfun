@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Editar Funcionário</span>
            <span class="ms-auto d-sm-flex flex-row">

                <a href="{{ route('user.index') }}" class="btn btn-info btn-sm me-1">Listar</a>

                <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-primary btn-sm me-1">Visualizar</a>

            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome Completo"
                        value="{{ old('name', $user->name) }}">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email"
                        value="{{ old('email', $user->email) }}">
                </div>

                <div class="col-md-6">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF"
                        value="{{ old('cpf', $user->cpf) }}">
                </div>

                <div class="col-md-6">
                    <label for="data-nascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" class="form-control" id="data_nascimento"
                        placeholder="Data de Nascimento" value="{{ old('data_nascimento', $user->data_nascimento) }}">
                </div>

                <div class="col-md-6">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Telefone"
                        value="{{ old('telefone', $user->telefone) }}">
                </div>

                <div class="col-md-6">
                    <label for="genero" class="form-label">Gênero</label>
                    <select name="genero" id="genero" class="form-select">
                        <option value="">Selecione</option>
                        <option value="Masculino" {{ old('genero', $user->genero) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Feminino" {{ old('genero', $user->genero) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                        <option value="Outro" {{ old('genero', $user->genero) == 'Outro' ? 'selected' : '' }}>Outro</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-warning btn-sm">Salvar</button>
                </div>

            </form>
        </div>
    </div>
@endsection
