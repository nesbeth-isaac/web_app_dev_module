<?php

namespace Database\Factories;

use App\Models\GroupUser;
use App\Models\User;
use App\Models\Group;

use App\Models\GroupAccessLevel;



use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GroupUser>
 */
class GroupUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totalUsers = User::count();
        
        $totalGroup = Group::count();
        $totalGroupAccessLevel = GroupAccessLevel::count();
        
        return [
            'group_id' => fake() -> unique(true) -> numberBetween(1, $totalGroup), 
            'user_id' => fake() -> unique(true) -> numberBetween(1, $totalUsers), 
            'group_access_level_id' => fake() -> numberBetween(1, $totalGroupAccessLevel), 
            
        ];
    }
}
