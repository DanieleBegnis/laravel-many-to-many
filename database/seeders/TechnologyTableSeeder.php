<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['css', 'js', 'vue', 'sql', 'php', 'laravel'];
        foreach($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->technology = $technology;
            $newTechnology->save();
        }
    }
}
