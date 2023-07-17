<?php

namespace Database\Seeders;

use App\Models\Tipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        Tipe::truncate();
        Schema::enableForeignKeyConstraints();

        $typeArray = config('types');
        foreach ($typeArray as $type) {
            $newType = new Tipe();
            $newType->name = $type['name'];
            $newType->save();
        }
    }
}
