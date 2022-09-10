<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('user')->insert([
'name' => 'samer',
'birthday' => '1990-11-30',
'age' => '32',
'gender' => 'male'
       ]);
       DB::table('user')->insert([
        'name' => 'sara',
        'birthday' => '1999-10-10',
        'age' => '23',
        'gender' => 'female'
               ]);
               DB::table('user')->insert([
                'name' => 'mohammad',
                'birthday' => '1999-09-27',
                'age' => '23',
                'gender' => 'male'
                       ]);
                       DB::table('user')->insert([
                        'name' => 'reem',
                        'birthday' => '2001-09-06',
                        'age' => '21',
                        'gender' => 'female'
                               ]);               
    }
}
