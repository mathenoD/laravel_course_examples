<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        // Randomly choosing between Post and Video
        $commentable = $this->faker->randomElement([
            Post::class,
            Video::class
        ]);

        // Assuming an equal distribution of Post and Video ids in the database
        $commentableId = $commentable::inRandomOrder()->first()->id;

        return [
            'body' => $this->faker->sentence,
            'commentable_id' => $commentableId,
            'commentable_type' => $commentable
        ];
    }
}
