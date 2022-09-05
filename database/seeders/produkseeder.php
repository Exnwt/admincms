<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        produks::truncate();
        produks::create([
            'name'=>'steven2',
            'code'=>bcrypt('makan2'),
        ]);
    }
}
