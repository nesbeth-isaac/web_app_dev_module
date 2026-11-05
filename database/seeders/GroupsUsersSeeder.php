<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\GroupUser;
use App\Models\Group;
use App\Models\User;




class GroupsUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::count();

        $groups = Group::count(); 

        $all_groups = Group::all();

        $all_users = Users:all(); 

    }
}
