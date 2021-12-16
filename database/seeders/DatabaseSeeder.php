<?php

namespace Database\Seeders;

use App\Models\Command;
use App\Models\Product;
use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.tn',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'phone' => $faker->phoneNumber() ,
            'address' => $faker->address(),
            'isAdmin' => true,
        ]);
        $user = User::factory()->create([
            'name' => 'user',
            'email' => 'user@user.tn',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'phone' => $faker->phoneNumber() ,
            'address' => $faker->address(),
            'isAdmin' => false,
        ]);
        User::factory(200)->create();
        Product::factory(500)->create();
        Command::factory(1000)->create();
    }
}
