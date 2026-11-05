<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Group;
use App\Models\GroupAccessLevel;




class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_groups = Group::all();

        $all_users = User::all(); 

        $totalGroupAccessLevel = GroupAccessLevel::count(); 

        User::factory()->count(100)
        -> hasAttached($all_groups, fn() => ['group_access_level_id' => mt_rand(1, $totalGroupAccessLevel)])
        ->create(); 
    }
}
