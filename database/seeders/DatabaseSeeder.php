<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            //    \App\Models\User::factory(10)->create();
            //    \App\Models\User::factory()->create([
            //     'name' => 'Sirima Chaytawil',
            //     'email' => 'sirima.ch@kkumail.com',
            //     'password' => Hash::make ('wordpass')
            // ]);
            
            
            $this->call([
                ProductTypesTableSeeder::class,
                ProductsTableSeeder::class,
            ]);
    }
    
}
