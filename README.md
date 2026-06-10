# Laravel Notes System

Sistema de notas completo com autenticação, criptografia de conteúdo e CRUD protegido.

## Requisitos

- PHP 8.1 ou superior
- Composer
- SQLite ou MySQL

## Instalação

1. `composer install`
2. `cp .env.example .env`
3. `php artisan key:generate`
4. `php artisan migrate`
5. `php artisan serve`

## Estrutura do Projeto

- `app/Models/Note.php`: modelo de nota com relacionamento `belongsTo` para usuário.
- `app/Http/Controllers/NoteController.php`: CRUD de notas e criptografia do conteúdo.
- `app/Policies/NotePolicy.php`: protege o acesso às notas do usuário logado.
- `resources/views`: views Blade para login, registro e gerenciamento de notas.

## Segurança

- Autenticação usando recursos nativos do Laravel.
- Senhas criptografadas com `Hash::make()`.
- Rotas protegidas com middleware `auth`.
- Conteúdo da nota criptografado usando `Crypt::encryptString()` antes de salvar.
- Conteúdo descriptografado com `Crypt::decryptString()` ao exibir.
- Usuários só podem acessar suas próprias notas por meio de policy.

## Observações

Este projeto usa autenticação padrão do Laravel e pode ser estendido usando `laravel/breeze` se desejar scaffolding adicional.
