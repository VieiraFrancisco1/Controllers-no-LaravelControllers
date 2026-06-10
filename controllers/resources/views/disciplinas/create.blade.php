<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Disciplina</title>
</head>
<body>
    <h1>Cadastro de Disciplina</h1>

    <!-- Formulário conectado à rota nomeada de store -->
    <form action="{{ route('disciplinas.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
