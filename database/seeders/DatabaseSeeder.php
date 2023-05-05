<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Models\User::factory(10)->create();
        \App\Models\People::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
        \App\Models\Contract::factory()->create([
            'contract' => 'Por definir', 
        ]);
        \App\Models\Contract::factory()->create([
            'contract' => 'Tiempo Completo', 
        ]);
        \App\Models\Contract::factory()->create([
            'contract' => 'Medio Tiempo', 
        ]);
        \App\Models\Role::factory()->create([
            'role' => 'Por definir', 
        ]);
        \App\Models\Role::factory()->create([
            'role' => 'Administrativos', 
        ]);
        \App\Models\Role::factory()->create([
            'role' => 'Profesores de planta', 
        ]);
        \App\Models\Role::factory()->create([
            'role' => 'Profesores de catedra', 
        ]);
        \App\Models\Role::factory()->create([
            'role' => 'Aprendices', 
        ]);
        \App\Models\Role::factory()->create([
            'role' => 'Talleristas bienestar', 
        ]);
        \App\Models\Document::factory()->create([
            'type' => 'Por definir', 
        ]);
        \App\Models\Document::factory()->create([
            'type' => 'Tarjeta de Identidad', 
        ]);
        \App\Models\Document::factory()->create([
            'type' => 'Cedula de Ciudadania', 
        ]);
        \App\Models\Document::factory()->create([
            'type' => 'Tarjeta de Extranjeria', 
        ]);
        \App\Models\Document::factory()->create([
            'type' => 'Cedula de Extranjeria', 
        ]);
    }
}
