<?php

namespace Database\Factories;
use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->RandomElement(['Billed','paid', 'concel']);
        return [
            'amout' => $this->faker->numberBetween(100,1000),
            'customer_id' => Customer::Factory(),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $status == 'paid' ?  $this->faker->dateTimeThisDecade() : NULL,
        ];
    }
}
