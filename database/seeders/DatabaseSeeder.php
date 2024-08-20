<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@francos.com',
            'password' => Hash::make('restaurantFrancos2024'),
            'about' => "Hola, soy Admin. Decisiones: si no puedes decidir, la respuesta es no. Si hay dos caminos igualmente difíciles, elige el más doloroso a corto plazo (evitar el dolor crea una ilusión de igualdad)..",
        ]);

        Category::create([
            'name' => 'Entremeses',
        ]);

        Category::create([
            'name' => 'Fajitas',
        ]);

        Category::create([
            'name' => 'Pastas',
        ]);

        Category::create([
            'name' => 'Carnes',
        ]);

        Category::create([
            'name' => 'Burritos',
        ]);

        Category::create([
            'name' => 'Bebidas',
        ]);
    }
}
