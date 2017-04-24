<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,1)->create([
            'name'  =>  'Clayton Beraldi',
            'email' =>  'clayton_186@hotmail',
        ]);

        factory(\App\User::class,20)->create();
    }
}
