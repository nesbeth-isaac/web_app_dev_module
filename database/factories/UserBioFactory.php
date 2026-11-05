<?php

namespace Database\Factories;

use App\Models\UserBio;
use App\Models\User; 
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends Factory<UserBio>
 */
class UserBioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $count = User::count();

        return [
            'bio' => fake() -> unique() -> sentence($nbWords = 4, $variableNbWords = true), 
            'user_id' => fake() -> unique() -> numberBetween(1, $count), 
        ];
    }
}
