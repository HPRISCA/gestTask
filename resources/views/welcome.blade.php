<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
<div class="text-center">
    <h1>Bienvenue sur l'application de gestion des tâches</h1>
    <p>Organisez vos tâches efficacement</p>
    <div class="mt-3">
        @php
            use Illuminate\Support\Facades\Auth;
        @endphp

        @if (Auth::check())
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Accéder à mes tâches</a>
        @else
            <p>Veuillez vous connecter pour accéder à vos tâches.</p>
            <a href="{{ route('login') }}" class="btn btn-success">Se connecter</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">S'inscrire</a>
        @endif
    </div>
</div>
</body>
</html>
