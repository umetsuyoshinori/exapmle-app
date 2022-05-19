<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // つぶやき投稿ユーザーのIDはデフォルトで1
            'user_id' =>1,
            'content' => $this->faker->realText(100),
            'created_at' => Carbon::now()->yesterday()
        ];
    }
}
