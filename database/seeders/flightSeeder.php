<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class flightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            [
                'flight_code' =>'JT610',
                'origin' =>'SUB',
                'destination' =>'GCK',
                'departure_time' => Carbon::create(2025, 12, 2,10,30)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::create(2025, 12, 3)->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'flight_code' =>'JT611',
                'origin' =>'JKT',
                'destination' =>'GTT',
                'departure_time' => Carbon::create(2025, 12, 2,10,30)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::create(2025, 12, 3)->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'flight_code' =>'JT612',
                'origin' =>'MDN',
                'destination' =>'GKK',
                'departure_time' => Carbon::create(2025, 12, 2,10,30)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::create(2025, 12, 3)->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'flight_code' =>'JT614',
                'origin' =>'SMG',
                'destination' =>'CCK',
                'departure_time' => Carbon::create(2025, 12, 2,10,30)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::create(2025, 12, 3)->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'flight_code' =>'JT615',
                'origin' =>'BNT',
                'destination' =>'GGG',
                'departure_time' => Carbon::create(2025, 12, 2,10,30)->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::create(2025, 12, 3)->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
            ]);
    }
}
