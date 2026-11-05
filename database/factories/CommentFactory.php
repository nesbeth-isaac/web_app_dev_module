<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\GroupUser;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Comment>
 */
class CommentFactory extends Factory
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
            'content' => fake() -> sentence($nbWords = 6, $variableNbWords = true),
        ]; 
    }
}
