<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;
use App\models\People;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        \App\Models\Contract::factory()->create([
            'contract' => 'Por definir', 
        ]);
        \App\Models\Contract::factory()->create([
            'contract' => 'Termino Fijo', 
        ]);
        \App\Models\Contract::factory()->create([
            'contract' => 'Termino Indefinido', 
        ]);
        \App\Models\Contract::factory()->create([
            'contract' => 'Obra o labor', 
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
        $this->call( Usersseeder::class);
        $this->call( Peopleseeder::class);
        \App\Models\Certificates::factory(5)->create();
    }
}
