<?php

namespace Database\Seeders;

use App\Models\admins;
use illuminate\support\str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admins::truncate();
        admins::create([
            'username'=>'steven2',
            'password'=>bcrypt('makan2'),
            'remember_token'=>str::random(60)
        ]);
    }
}
