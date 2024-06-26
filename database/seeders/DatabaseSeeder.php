<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //dinamis
        User::factory(10)->create();
        //statis
        User::factory()->create([
            'name' => 'Dedy',
            'email' => 'dedospratamos@gmail.com',
            'password' => Hash::make('123'),

        ]);
    }
}
