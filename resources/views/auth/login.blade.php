<!DOCTYPE html> 
<html> 
    <head> 
        <title>Connexion</title> 
    </head> 
    <body> 
        <h1>Connexion</h1> 
        <form method="POST" action="{{route('login')}}"> 
            @csrf 
            <div> 
                <label for="email">Email</label> 
                <input type="email" name="email" id="email" required> 
            </div> 
            <div> 
                <label for="mot_de_passe">Mot de passe</label> 
                <input type="password" name="mot_de_passe" id="mot_de_passe" required> 
            </div> 
            <div> 
                <button type="submit">Se connecter</button> 
            </div> 
        </form> 
    </body> 
</html>