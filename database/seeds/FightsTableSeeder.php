<?php

use Illuminate\Database\Seeder;

class FightsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
         DB::table('fights')->insert([
            'fighterOneID' => '1',
            'fighterTwoID' => '2',
            'promotionID' => '1',
            'rating' => '0'
        ]);
         DB::table('fights')->insert([
            'fighterOneID' => '1',
            'fighterTwoID' => '3',
            'promotionID' => '1',
            'rating' => '0'
        ]);
         DB::table('fights')->insert([
            'fighterOneID' => '2',
            'fighterTwoID' => '4',
            'promotionID' => '1',
            'rating' => '0'
        ]);
         DB::table('fights')->insert([
            'fighterOneID' => '3',
            'fighterTwoID' => '5',
            'promotionID' => '1',
            'rating' => '0'
        ]);
         DB::table('fights')->insert([
            'fighterOneID' => '1',
            'fighterTwoID' => '6',
            'promotionID' => '1',
            'rating' => '0'
        ]);
         DB::table('fights')->insert([
            'fighterOneID' => '4',
            'fighterTwoID' => '5',
            'promotionID' => '1',
            'rating' => '0'
        ]);
         DB::table('fights')->insert([
            'fighterOneID' => '2',
            'fighterTwoID' => '6',
            'promotionID' => '1',
            'rating' => '0'
        ]);
         DB::table('fights')->insert([
            'fighterOneID' => '7',
            'fighterTwoID' => '8',
            'promotionID' => '1',
            'rating' => '0'
        ]);
    }
}
