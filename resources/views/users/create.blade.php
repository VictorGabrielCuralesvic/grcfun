<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curalesvic</title>
</head>
<body>

    <a href="{{ route('user.index')}}">Listar</a><br>
    <h2>Cadastrar Funcionário</h2>

    <form action="#" method="POST">
        @@csrf
        @method('POST')

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome Completo"><br>

        <label>Email: </label>
        <input type="email" name="email" placeholder="Email" required><br>
    
        <label>Senha: </label>
        <input type="password" name="password" placeholder="Senha com minimo 6 caracteres" required><br>
    
        <label>CPF: </label>
        <input type="number" name="cpf" placeholder="CPF" required><br>
    
        <label>Data de Nascimento: </label>
        <input type="date" name="data_nascimento" required><br>
    
        <label>Telefone: </label>
        <input type="number" name="telefone" placeholder="Telefone" required><br>
    
        <label>Gênero: </label>
        <select name="genero" required>
            <option value="">Selecione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select><br>

        <button type="Submit">Cadastrar</button>

    </form>
    
</body>
</html>