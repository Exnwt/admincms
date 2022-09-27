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
        roles::truncate();
        roles::create([
            'role_name'=>'master',
        ]);
        roles::truncate();
        roles::create([
            'role_name'=>'manager',
        ]);
        roles::truncate();
        roles::create([
            'role_name'=>'admin',
        ]);


        authorize_types::truncate();
        authorize_types::create([
            'type_name'=>'view',
        ]);
        authorize_types::truncate();
        authorize_types::create([
            'type_name'=>'add',
        ]);
        authorize_types::truncate();
        authorize_types::create([
            'type_name'=>'edit',
        ]);
        authorize_types::truncate();
        authorize_types::create([
            'type_name'=>'delete',
        ]);
        authorize_types::truncate();
        authorize_types::create([
            'type_name'=>'master',
        ]);

        menus::truncate();
        menus::create([
            'menu_name'=>'produk',
        ]);
        menus::truncate();
        menus::create([
            'menu_name'=>'produk kategori',
        ]);
        menus::truncate();
        menus::create([
            'menu_name'=>'transaction',
        ]);
        menus::truncate();
        menus::create([
            'menu_name'=>'voucher',
        ]);
        menus::truncate();
        menus::create([
            'menu_name'=>'1',
        ]);  


        authorize::truncate();
        authorize::create([
            'role_id'=>'1',
            'authorize_type_id'=>'1',
            'menu_id'=>'5',
            'status'=>'1',
        ]); 

        authorize::truncate();
        authorize::create([
            'role_id'=>'1',
            'authorize_type_id'=>'2',
            'menu_id'=>'5',
            'status'=>'1',
        ]);  
        authorize::truncate();
        authorize::create([
            'role_id'=>'1',
            'authorize_type_id'=>'3',
            'menu_id'=>'5',
            'status'=>'1',
        ]);  
        authorize::truncate();
        authorize::create([
            'role_id'=>'1',
            'authorize_type_id'=>'4',
            'menu_id'=>'5',
            'status'=>'1',
        ]);  

        admins::truncate();
        admins::create([
            'username'=>'steven2',
            'role_id'=>'1',
            'password'=>bcrypt('makan2'),
            'remember_token'=>str::random(60)
        ]);
    }
}
