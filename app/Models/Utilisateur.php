<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable; 

class Utilisateur extends Authenticatable implements AuthenticatableContract { 
    use HasFactory;
    
    use Notifiable; 
    protected $table = 'utilisateurs'; // Nom de la table 
    protected $fillable = ['nom', 'email', 'mot_de_passe']; // Champs remplissables 
    protected $hidden = ['mot_de_passe', 'remember_token']; // Champs cachés 

    // Si le champ de mot de passe est personnalisé 
    public function getAuthPassword() { 
        return $this->mot_de_passe; 
    } 
}
