<?php

namespace Database\Factories;
// use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->RandomElement(['individual','company']);
        $name = ($type == 'Individual') ? $this->faker->name() : $this->faker->company();
        return [
            'name' => $name,
            'type' => $type,
        ];
    }
}
