<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CompaniesTableSeeder::class,
            ContactsTableSeeder::class
        ]);
        // Companies::factory()->count(10)->create();
        // Contact::factory()->count(50)->create();
    }
}
