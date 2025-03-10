<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
// class state extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */


     
//      App\Models\State::class, function (Faker $faker)
//     {
//         for ($i=0; $i < 20 ; $i++) { 
//             DB::table('states')->insert([
//                 [
//                     'state_name' => $faker->name,
//                     'state_image' => '',
//                 ],
//             ]);
//         }
        
//     }
// }

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'state_name' => $faker->name,
        'state_image' => '',
    ]
});
