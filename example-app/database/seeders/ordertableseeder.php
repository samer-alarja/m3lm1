<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ordertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            'id_amount' => '1',
            'delivery_date' => '2021_09_21',
            'status' => 'done',
                   ]); 
                   DB::table('order')->insert([
                    'id_amount' => '1',
                    'delivery_date' => '2022_09_23',
                    'status' => 'in-progress',
                           ]);
                           DB::table('order')->insert([
                            'id_amount' => '2',
                            'delivery_date' => '2020_11_30',
                            'status' => 'done',
                                   ]); 
                                   DB::table('order')->insert([
                                    'id_amount' => '2',
                                    'delivery_date' => '2022_11_30',
                                    'status' => 'in-progress',
                                           ]);
                                           DB::table('order')->insert([
                                            'id_amount' => '3',
                                            'delivery_date' => '2022_10_29',
                                            'status' => 'pend',
                                                   ]); 
                                                   DB::table('order')->insert([
                                                    'id_amount' => '3',
                                                    'delivery_date' => '2021_4_30',
                                                    'status' => 'done',
                                                           ]);
                                                           DB::table('order')->insert([
                                                            'id_amount' => '4',
                                                            'delivery_date' => '2022_12_20',
                                                            'status' => 'pend',
                                                                   ]); 
                                                                   DB::table('order')->insert([
                                                                    'id_amount' => '4',
                                                                    'delivery_date' => '2020_12_10',
                                                                    'status' => 'done',
                                                                           ]);         
    }
}
