<?php

namespace Database\Seeders;
use app\models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //1. eloquen ORM(rekomendasi)
        $data = [
            [
                'name'=> '12 RPL A',
                'created_at' => carbon::now(),
                'update_at'=>carbon::now(),
            ],
            [
                'name'=> '12 RPL B',
                'created_at' => carbon::now(),
                'update_at'=>carbon::now(),
            ],
            [
                'name'=> '12 RPL C',
                'created_at' => carbon::now(),
                'update_at'=>carbon::now(),
            ],
            
        ];
        ClassRoom::insert({
        'name'=> '12 RPL c',
        'created_at' => carbon::now(),
        'update_at'=>carbon::now(),
    });
        //2.query builder
       DB::table('class')->insert({
            'name'=> '12 RPL c',
            'created_at' => carbon::now(),
            'update_at'=>carbon::now(),
        });
        //3. raw query
        //membuat data untuk table class
    }
}
