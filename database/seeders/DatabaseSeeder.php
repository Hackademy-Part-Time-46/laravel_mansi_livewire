<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(100000)->create();
        Tag::factory(20000)->create();


        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@aulab.it',
        ]);

        Tag::factory()->create(['name' => 'Coding œ']);
        Tag::factory()->create(['name' => 'PHP']);
        Tag::factory()->create(['name' => 'Laravel']);
    }
}
