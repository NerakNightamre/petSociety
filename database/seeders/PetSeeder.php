<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PetSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pet::factory(20)->create();
        // $data = [
        //     'Species' => 'cat',
        //     'Gender' => 'M',
        //     'Name' => 'Rollito',
        //     'Age' => '3',
        //     'race' => 'siames',
        //     'Comments' => 'Gato con ganas de ser adoptado',
        //     'owner_id' => '1',
        //     'file' => '/storage/SYQjHzHNEcJI0HT3oNLGEshlHvJfjNEWJvU3zWyV.jpg'
        // ];
        // DB::table('pets')->insert($data);
    }
}