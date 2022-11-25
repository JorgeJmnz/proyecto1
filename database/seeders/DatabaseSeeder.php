<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    use HasFactory;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Rol y permiso
        $this->call(RoleSeeder::class);

        //Usuarios Registrados BASE
        $this->call(UserSeeder::class);


        User::create()->each(function($user){
            $user->assignRole('Reader');
        });
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
