<?php

namespace Database\Factories;

use App\Models\post_comments;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCommentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post_comments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
