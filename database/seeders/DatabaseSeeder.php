<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\Travel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(RoleSeeder::class);

        $travels = Travel::factory()->count(30)->create();
        $tours = Tour::factory()->count(30)->create([
            'travel_id' => fn () => $travels->random()->id,
        ]);
    }
}
