<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                $user = [

            [

               'name'=>'Nnamdi',

               'email'=>'nugwuegbu@tes.com.ng',

               'phone'=>'08035660292',

                'is_admin'=>'1',
                'is_contractor'=>'0',

               'password'=> bcrypt('welcome'),

            ],

            [

               'name'=>'Godfrey',

               'email'=>'nugwuegbu089@gmail.com',

               'phone'=>'08118955539',

                'is_admin'=>'0',
                'is_contractor'=>'0',

               'password'=> bcrypt('welcome'),

            ],
            [

               'name'=>'lateef',

               'email'=>'lateef@gmail.com',

               'phone'=>'08118954539',

                'is_admin'=>'0',
                'is_contractor'=>'1',

               'password'=> bcrypt('welcome'),

            ],


        ];

  

        foreach ($user as $key => $value) {

            User::create($value);

        }
    }
}
