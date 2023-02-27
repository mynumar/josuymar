<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoleSeeder::class);
        $this->call(EventoSeeder::class);


        $novio = User::create([
            'name' => 'Josué Vitate',
            'email' => 'josue.vitate@gmail.com',
            'password' => Hash::make('teamo1905')
        ]);

        $novia = User::create([
            'name' => 'Marjorie Ynuma',
            'email' => 'marjorie.mdyr@gmail.com',
            'password' => Hash::make('teamo1905')
        ]);

        $novio->assignRole('admin');
        $novia->assignRole('admin');



    }
}
