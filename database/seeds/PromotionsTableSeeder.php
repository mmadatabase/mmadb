<?php

use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
       DB::table('promotions')->insert([
         'name' => 'UFC'
     ]);
    }
}
