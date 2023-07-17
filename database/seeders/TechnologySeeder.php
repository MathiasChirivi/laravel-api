<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Schema;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Technology::truncate();
        Schema::enableForeignKeyConstraints();

        $techArray = config('tecnology');
        foreach ($techArray as $tech) {
            $newTech = new Technology();
            $newTech->name = $tech['name'];
            $newTech->save();
        }
    }
}
