<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Comment;
use App\Models\GroupUser;
use App\Models\Notification; 
use App\Models\Like;



class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = GroupUser::where('group_access_level_id', '1')->count();
        Post::factory()
        -> has(Comment::factory()->count(3) -> hasLikesOrComments())
        -> has(Like::factory() -> count(3) -> hasLikesOrComments())
        ->count($count)->create(); 
    }
}
