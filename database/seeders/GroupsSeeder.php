<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Group;


class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group1 = new Group(); 
        $group1 -> group_name="Lego"; 

        $group1 -> save(); 

        $group2 = new Group(); 
        $group2 -> group_name="Metaswitch"; 

        $group2 -> save(); 

        Group::factory()->count(10)->create(); 

    }
}
