<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Joshua Agena',
            'email' => 'tent@mail.com',
            'password' => Hash::make('Joshua096321'), // always hash passwords
        ]);

        // Optional: generate more random users using factory
        User::factory()->count(10)->create();
    }
}
