<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>

    <!-- Fluxo create -> store com rota nomeada -->
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
