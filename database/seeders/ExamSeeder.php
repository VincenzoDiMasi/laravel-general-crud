<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $exam = new Exam();
            $exam->surname = $faker->word();
            $exam->name = $faker->word();
            $exam->fiscal_code = $faker->creditCardNumber();
            $exam->date_of_birth = $faker->date('d/m/Y');
            $exam->genre =  $faker->randomElement(['F', 'M', '#']);
            $exam->exam_type = $faker->sentence();
            $exam->blood_platelet = $faker->numberBetween(140, 440);
            $exam->white_blood_cells = $faker->numberBetween(4, 11);
            $exam->hemoglobin = $faker->randomFloat(2, 4, 6);
            $exam->hematocrit = $faker->numberBetween(140, 180);
            $exam->average_cell_volume = $faker->numberBetween(40, 52);
            $exam->average_cell_content_hb = $faker->numberBetween(82, 98);
            $exam->average_cell_concentration = $faker->numberBetween(25, 34);
            $exam->gr = $faker->numberBetween(11, 14);
            $exam->mean_plate_volume = $faker->numberBetween(5, 24);
            $exam->hypochromic_red_blood_cells = $faker->numberBetween(0, 11);
            $exam->sgpt = $faker->numberBetween(4, 41);

            $exam->save();
        }
    }
}
