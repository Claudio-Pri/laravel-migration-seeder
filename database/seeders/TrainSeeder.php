<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //svuoto la tabella prima di seedare
        Train::truncate();

        for ($i = 0; $i < 5; $i++) {
            $train = new Train();
            $train->company = fake()->company();
            $train->dep_station = fake()->city();
            $train->arr_station = fake()->city();
            $train->dep_time = fake()->time();
            $train->arr_time = fake()->time();
            $train->train_code = 'Code';
            $train->carriages_number = '8';
            // $train->on_time = '';
            // $train->canceled = '';

            //salvo la nuova istanza
            $train->save();
        }
        
    }
}

// comando inconsole per seeddare:
// php artisan db:seed --class=TrainSeeder