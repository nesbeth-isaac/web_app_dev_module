<?php

namespace Database\Factories;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Comment;
use App\Models\GroupUser;

/**
 * @extends Factory<Like>
 */
class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
         $groupUser = GroupUser::where('group_access_level_id', '2')
        -> inRandomOrder()
        -> first(); 

        return [
            'user_id' =>$groupUser-> user_id, 
        ];
    }
}
