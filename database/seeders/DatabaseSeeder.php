<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Utilisateur::factory(10)->create();

        Utilisateur::factory()->create([
            'nom' => 'ali',
            'email' => 'test@we.com',
            'mot_de_passe' => bcrypt('123qw'),
        ]);
    }
}
