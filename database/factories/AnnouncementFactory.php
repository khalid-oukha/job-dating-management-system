<?php

namespace Database\Factories;

use App\Models\Companie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            $user_ids = DB::table('users')->select('id')->get(),
            $companies_ids = DB::table('companies')->select('id')->get(),

            // 'user_id' => User::inRandomOrder()->first()->id,
            // 'company_id' => Companie::inRandomOrder()->first()->id,   
            'user_id' => $this->faker->randomElement($user_ids)->id,
            'company_id' => $this->faker->randomElement($companies_ids)->id,
               
        ];

    }
}
