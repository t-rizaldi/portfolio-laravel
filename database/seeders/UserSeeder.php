<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'      => 'T. Rizaldi Fadli',
                'email'     => 't.rizaldifadli2001@gmail.com',
                'username'  => 't_rizaldi',
                'password'  => bcrypt('rizaldi01'),
                'role_id'   => 1
            ],
        ];


        foreach($data as $d){
            User::create($d);
        }
    }
}
