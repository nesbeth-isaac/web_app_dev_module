<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SystemRole;

class SystemRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = new SystemRole(); 
        $role1 -> access_level="standard_user"; 

        $role1 -> save(); 

        $role2 = new SystemRole(); 
        $role2 -> access_level="moderator"; 

        $role2 -> save(); 


        $role3 = new SystemRole(); 
        $role3 -> access_level="administrator"; 

        $role3 -> save(); 

    }
}
