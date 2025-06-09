<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Message; // 追記が必要

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    // definition()の処理全体の追記が必要
    public function definition()
    {
        $content = ['Web用', '機械学習用', 'フロントエンド用', '業務用', 'Unitiy用', 'iphone用', 'Android用'];
        $title = ['php', 'python', 'JavaScript', 'Java', 'C#', 'swift', 'kotolin'];

        $content = $content[rand(0, count($content) - 1)];
        $title = $title[rand(0, count($title) - 1)];
        return [
            'content' => $content,
            'title' => $title,
        ];
    }
}