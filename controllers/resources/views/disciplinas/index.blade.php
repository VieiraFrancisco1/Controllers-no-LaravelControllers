<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplinas</title>
</head>
<body>
    <h1>Disciplinas</h1>

    <!-- Dados enviados pela action index do controller -->
    <ul>
        @foreach ($disciplinas as $disciplina)
            <li>{{ $disciplina }}</li>
        @endforeach
    </ul>
</body>
</html>
