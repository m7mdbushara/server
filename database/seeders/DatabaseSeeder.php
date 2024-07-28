<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        DB::table('users')->insert([
            'email' => 'admin@app.com',
            'name' => 'admin',
            'password' => Hash::make(123456),
        ]);

        DB::table('parents')->insert([
            'parent_name' => 'john doe',
            'id_number' => '12345',
            'nationality' => 'سعودي',
            'gender' => 'male',
            'id_expiration_date' => '2023-03-10',
            'username' => 'johnDoe',
            'password' => Hash::make(123456),
        ]);
    }
}
