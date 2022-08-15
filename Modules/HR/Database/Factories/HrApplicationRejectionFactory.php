<?php

namespace Modules\HR\Database\Factories;

use Faker\Factory as Faker;
use Modules\HR\Entities\ApplicationRound;
use Modules\HR\Entities\HRRejectionReason;
use Illuminate\Database\Eloquent\Factories\Factory;

class HrApplicationRejectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HRRejectionReason::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'hr_application_round_id' => ApplicationRound::factory()->create()->id,
            'reason_title' => $faker->text(),
            'reason_comment' => $faker->text(),
        ];
    }
}
