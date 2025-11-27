<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\Registration;
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
        // Seed Italian provinces and comuni
        $this->call(ProvincieComuniSeeder::class);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'is_admin' => true,
        ]);

        User::factory(10)->create();
        Conference::factory(10)->create();

        $this->call(RegistrationSeeder::class);
    }
}
