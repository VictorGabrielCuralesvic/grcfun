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

    ID: {{ $user->id }} <br>
    Nome: {{ $user->name }} <br>
    Email: {{ $user->email }} <br>
    CPF: {{ $user->cpf }} <br>
    Data de Nascimento: {{ $user->data_nascimento }} <br>
    Telefone: {{ $user->telefone }} <br>
    Gênero: {{ $user->genero }} <br>


</body>
</html>