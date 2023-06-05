<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        \App\Models\User::factory()->create([
            "name"=>"Administrador",
            "email"=>"admin@gmail.com",
            "password"=>Hash::make("admin123"),
            "id_roles"=>2
        ]);
        \App\Models\User::factory()->create([
            "name"=>"user",
            "email"=>"user@gmail.com",
            "password"=>Hash::make("user123"),
            "id_roles"=>1
        ]);
        \App\Models\People::factory()->create([
            "id_documents"=>3,
            "doc"=>1234567890,
            "date"=>date("y.m.d"),
            "id_contracts"=>2,
            "salary"=>123,
            "date_i"=>date("y.m.d"),
            "date_f"=>date("y.m.d"),
            "onus"=>"asd",
            "area"=>"admin",
            "pay_per_hour"=>123,
            "id_users"=>1,
        ]);
        \App\Models\People::factory()->create([
            "id_documents"=>3,
            "doc"=>1234567890,
            "date"=>date("y.m.d"),
            "id_contracts"=>1,
            "salary"=>123,
            "date_i"=>date("y.m.d"),
            "date_f"=>date("y.m.d"),
            "onus"=>"asd",
            "area"=>"admin",
            "pay_per_hour"=>123,
            "id_users"=>2,
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\People::factory(10)->create();
        \App\Models\Certificates::factory(5)->create();
    }
}
