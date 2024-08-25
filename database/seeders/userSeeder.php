<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'first_name' => 'Jhon',
            'middle_name' => '',
            'last_name' => 'Doe',
            'email' => 'test@example.com',
            'password' => '11111111',
        ]);

        $user->assignRole('ADMIN');

        $user = User::factory()->create([
            'first_name' => 'jim',
            'middle_name' => '',
            'last_name' => 'Hopper',
            'email' => 'user@gmail.com',
            'password' => '11111111',
        ]);

        $user->assignRole('SUPER-ADMIN');

        User::factory()->count(50)->create();
    }
}
