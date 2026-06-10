<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Alunos</title>
</head>
<body>
    <h1>Listagem de Alunos</h1>

    <!-- Exibição da coleção simulada de alunos -->
    <ul>
        @foreach ($alunos as $aluno)
            <li>{{ $aluno }}</li>
        @endforeach
    </ul>
</body>
</html>
