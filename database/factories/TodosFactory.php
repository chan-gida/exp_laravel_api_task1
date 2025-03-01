<?php

namespace Database\Factories;

use App\Models\Todos;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todos>
 */
class TodosFactory extends Factory
{

    // 🔽 追加
    protected $model = Todos::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // UserモデルのFactoryを使用してユーザを生成
            'tweet' => $this->faker->text(200) // ダミーのテキストデータ
        ];
    }
}
