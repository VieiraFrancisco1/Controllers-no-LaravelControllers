<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>

    <!-- Formulário apontando para a action store padrão do resource -->
    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
