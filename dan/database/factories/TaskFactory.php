<?php

namespace Database\Factories;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{     
    public function definition()
    
    {
        return [
            'name'=>$this->faker->word,
            'slug'=>$this->faker->word,
        ];
    }
}
