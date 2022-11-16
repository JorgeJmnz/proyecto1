<?php

namespace Database\Seeders;

//Exportar modelos a usar
use App\Models\Categoria;
use App\Models\Modulo;
use App\Models\Subestacione;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use illumitate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        Categoria::factory(4)->create();
        Modulo::factory(4)->create();
        Subestacione::factory(4)->create();
        User::factory(4)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
