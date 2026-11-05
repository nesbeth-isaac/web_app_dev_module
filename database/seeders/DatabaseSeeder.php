<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(SystemRolesSeeder::class);

        $this->call(GroupAccessLevelsSeeder::class);

        $this->call(GroupsSeeder::class);
        $this->call(UsersSeeder::class); 

        $this->call(UserBiosSeeder::class);

        $this->call(PostsSeeder::class);

        



    }
}
