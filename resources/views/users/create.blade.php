<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curalesvic</title>
</head>
<body>

    <a href="{{ route('user.index') }}">Listar</a><br>

    <h2>Cadastrar Funcionário</h2>

    @if ($errors->any())
        <p style="color: red">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </p>
    @endif

    <form action="{{ route('user.store') }}" method="POST" >
        @csrf
        @method('POST')

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}"><br>
    
        <label>Email: </label>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    
        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha com mínimo 6 caracteres"><br>
    
        <label>CPF: </label>
        <input type="number" name="cpf" placeholder="CPF" value="{{ old('cpf') }}"><br>
    
        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" value="{{ old('data_nascimento') }}"><br>
    
        <label>Telefone: </label>
        <input type="number" name="telefone" placeholder="Telefone" value="{{ old('telefone') }}"><br>
    
        <label>Gênero: </label>
        <select name="genero">
            <option value="">Selecione</option>
            <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Feminino" {{ old('genero') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
            <option value="Outro" {{ old('genero') == 'Outro' ? 'selected' : '' }}>Outro</option>
        </select><br>
    
        <button type="submit">Cadastrar</button>

    </form>
    
</body>
</html>