<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Grocery;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = user::create(
            [
                'first_name' => 'Daniel',
                'last_name' => 'Melin',
                'email' => 'test@example.com',
                'phone' => '+46793266980',
                'password' => bcrypt('abc123')
            ]
        );
    }
}
