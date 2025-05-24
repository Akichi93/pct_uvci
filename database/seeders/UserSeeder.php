<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création d'un administrateur
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'phone' => '+225 0123456789',
            'address' => 'Abidjan, Côte d\'Ivoire',
        ]);

        // Création de quelques utilisateurs standard
        User::create([
            'name' => 'Citoyen Test',
            'email' => 'citoyen@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone' => '+225 0123456788',
            'address' => 'Yamoussoukro, Côte d\'Ivoire',
        ]);

        // Création d'utilisateurs factices supplémentaires
        User::factory(10)->create();
    }
}
