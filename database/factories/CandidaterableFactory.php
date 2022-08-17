<?php

namespace Database\Factories;

use App\Models\Candidate;
use App\Models\Recruiter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidaterable>
 */
class CandidaterableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'candidaterable_id' => $this->faker->randomElement(['1', '2', '3']),
            'candidaterable_type' => $this->faker->randomElement([Candidate::class, Recruiter::class]),
        ];
    }
}
