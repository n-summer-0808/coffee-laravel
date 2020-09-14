<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 3) as $num) {
            DB::table('beans')->insert([
                'country' => "コロンビア",
                'area' => "",
                'elevation' => "",
                'farm' => "",
                'farmer' => "",
                'variety' => "",
                'roasting' => $num,
                'method_of_processing' => "",
                'caffein' => 0,
                'flavor' => "",
                'shop' => "丸山珈琲",
                'branch' => "",
                'purchase_date' => Carbon::yesterday(),
                'weight' => 200,
                'price' => 1100,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => 1,
            ]);
        }
    }
}
