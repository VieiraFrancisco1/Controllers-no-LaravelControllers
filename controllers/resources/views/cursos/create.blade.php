<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Curso</title>
</head>
<body>
    <h1>Cadastro de Curso</h1>

    <!-- Formulário enviando para a rota nomeada do store -->
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
