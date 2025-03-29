<!DOCTYPE html> 
<html lang="fr"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Gestion des Sessions</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    </head> 
    <body> 
        <div class="container mt-5"> 
            <h1>Gestion des Sessions</h1> 
            @if(session('success')) 
                <div class="alert alert-success"> {{ session('success') }} </div> 
            @endif 
            @if(session('error')) 
                <div class="alert alert-danger"> {{ session('error') }} </div> 
            @endif 
            
            <div class="mb-3"> 
                <p>
                    <strong>Nom d'utilisateur en session :</strong> 
                    {{ session('username', 'Aucun') }}
                </p> 
                <p>
                    <strong>Compteur de visites :</strong> 
                    {{ session('counter', 0) }}
                </p> 
            </div> 
            <div class="mb-3"> 
                <a href="{{ route('session.store') }}" class="btn btn-primary">Stocker un nom d'utilisateur</a> 
                <a href="{{ route('session.delete') }}" class="btn btn-warning">Supprimer le nom d'utilisateur</a> 
                <a href="{{ route('session.clear') }}" class="btn btn-danger">Supprimer toutes les sessions</a> 
                <a href="{{ route('session.regenerate') }}" class="btn btn-info">Régénérer l'ID de session</a> 
                <a href="{{ route('session.increment') }}" class="btn btn-success">Incrémenter le compteur</a> 
                <a href="{{ route('session.decrement') }}" class="btn btn-secondary">Décrémenter le compteur</a> 
                <a href="{{ route('logout') }}" class="btn btn-dark">Déconnexion</a> 
            </div> 
        </div> 
    </body>
</html>