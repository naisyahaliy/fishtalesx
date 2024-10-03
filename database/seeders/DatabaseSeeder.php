<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Articel;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'FishTales',
            'email' => 'FishTales@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Articel::create([
            'judul' => 'Ikan',
            'kategori' => 'vertebrata',
            'foto' => ''
        ]);
    }
}
