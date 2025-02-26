<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curalesvic</title>
</head>
<body>

    <a href="{{ route('user.create')}}">Cadastrar</a><br>
    <h2>Listar Funcionários</h2>

    @if (session('success'))
        <p style="color: green">
            {{ session('success') }}
        </p>    
    @endif

    @forelse ($users as $user)
        ID: {{ $user->id}} <br>
        Nome: {{ $user->name }} <br>
        Email: {{ $user->email }} <br>
        CPF: {{ $user->cpf }} <br>
        Data de Nascimento: {{ $user->data_nascimento }} <br>
        Telefone: {{ $user->telefone }} <br>
        Gênero: {{ $user->genero }} <br>

        <a href="{{ route('user.show', ['user' => $user->id])}}">Visualizar</a>

        <hr>
    @empty
        <p>Nenhum usuário cadastrado.</p>
    @endforelse
    
</body>
</html>
