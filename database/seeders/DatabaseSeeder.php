<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1303'),
        ]);

        Product::create([
            'name_product' => 'Bundle Website Novice',
            'description_product' => 'Description Bundle Website Novice',
            'image_product' => null,
            'price' => '29',
        ]);

        Product::create([
            'name_product' => 'Bundle Website Expert',
            'description_product' => 'Description Bundle Website Expert',
            'image_product' => null,
            'price' => '54',
        ]);

        Product::create([
            'name_product' => 'Bundle Website Master',
            'description_product' => 'Description Bundle Website Master',
            'image_product' => null,
            'price' => '82',
        ]);
    }
}
