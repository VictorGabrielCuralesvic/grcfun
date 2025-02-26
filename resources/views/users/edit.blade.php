<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curalesvic</title>
</head>
<body>

    <a href="{{ route('user.index') }}">Listar</a> <br>
    <a href="{{ route('user.show', ['user' => $user->id])}}">Visualizar</a> <br>

    <h2>Editar Funcionário</h2>

    @if ($errors->any())
        <p style="color: red">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </p>
    @endif

    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" >
        @csrf
        @method('PUT')

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name', $user->name) }}"><br>
    
        <label>Email: </label>
        <input type="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}"><br>
    
        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha com mínimo 6 caracteres"><br>
    
        <label>CPF: </label>
        <input type="number" name="cpf" placeholder="CPF" value="{{ old('cpf', $user->cpf) }}"><br>
    
        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" value="{{ old('data_nascimento', $user->data_nascimento) }}"><br>
    
        <label>Telefone: </label>
        <input type="number" name="telefone" placeholder="Telefone" value="{{ old('telefone', $user->telefone) }}"><br>
    
        <label>Gênero: </label>
        <select name="genero">
            <option value="">Selecione</option>
            <option value="Masculino" {{ old('genero', $user->genero) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Feminino" {{ old('genero', $user->genero) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
            <option value="Outro" {{ old('genero', $user->genero) == 'Outro' ? 'selected' : '' }}>Outro</option>
        </select><br>
    
        <button type="submit">Salvar</button>

    </form>
    
</body>
</html>