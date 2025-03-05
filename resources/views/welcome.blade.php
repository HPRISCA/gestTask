<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('images/tache.webp'); 
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh; 
            font-family: 'Roboto', sans-serif;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1; 
        }

        .content {
            z-index: 2; 
            position: relative;
            color: white;
            text-align: center;
            animation: fadeInUp 1.5s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn-container a {
            margin: 10px;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="overlay"></div> 
    
    <div class="content">
        <h1>Bienvenue sur l'application de gestion des tâches</h1>
        <p>Organisez vos tâches efficacement</p>
        <div class="btn-container">
            @php
                use Illuminate\Support\Facades\Auth;
            @endphp

            @if (Auth::check())
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Accéder à mes tâches</a>
            @else
                <p>Veuillez vous connecter pour accéder à vos tâches.</p>
                <a href="{{ route('login') }}" class="btn btn-success">Se connecter</a>
                <a href="{{ route('register') }}" class="btn btn-danger">S'inscrire</a>
            @endif
        </div>
    </div>
</body>
</html>
