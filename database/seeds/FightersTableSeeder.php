<?php

use Illuminate\Database\Seeder;

class FightersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *       $table->string('firstName');
            $table->string('lastName');
            $table->string('nickname');
            $table->enum('nicknamePosition
     * @return void
     */
    public function run() {
         DB::table('fighters')->insert([
            'firstName' => 'Royce',
            'lastName' => 'Gracie',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Gerard',
            'lastName' => 'Gordeau',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Ken',
            'lastName' => 'Shamrock',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Kevin',
            'lastName' => 'Rosier',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Patrick',
            'lastName' => 'Smith',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Art',
            'lastName' => 'Jimmerson',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Zane',
            'lastName' => 'Frazier',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Teila',
            'lastName' => 'Tuli',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Jaon',
            'lastName' => 'DeLucia',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
         DB::table('fighters')->insert([
            'firstName' => 'Trent',
            'lastName' => 'Jenkins',
            'nickname' => '',
            'nicknamePosition' => 'middle'
        ]);
        
    }
}
