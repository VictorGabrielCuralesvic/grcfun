<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curalesvic</title>
</head>
<body>
    
    <a href="{{ route('user.index') }}">Listar</a>

    <h2>Visualizar Funcionário</h2>
    
    @if (session('success'))
        <p style="color: green">
            {{ session('success') }}
        </p>    
    @endif

    ID: {{ $user->id }} <br>
    Nome: {{ $user->name }} <br>
    Email: {{ $user->email }} <br>
    CPF: {{ $user->cpf }} <br>
    Data de Nascimento: {{ $user->data_nascimento }} <br>
    Telefone: {{ $user->telefone }} <br>
    Gênero: {{ $user->genero }} <br>
    Contratado: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }} <br>
    Editado: {{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }} <br>

    <form method="POST" action="{{ route('user.destroy', ['user' => $user->id] )}}">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar este funcionário?')">Apagar</button>
    </form>


</body>
</html>