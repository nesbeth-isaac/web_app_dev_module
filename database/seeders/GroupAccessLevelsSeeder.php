<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GroupAccessLevel;

class GroupAccessLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = new GroupAccessLevel(); 
        $role1 -> access_level="owner"; 

        $role1 -> save(); 

        $role2 = new GroupAccessLevel(); 
        $role2 -> access_level="follower"; 

        $role2 -> save(); 
    }
}
