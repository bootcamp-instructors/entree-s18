<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdjectivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adjectives')->insert([
            'name' => 'chopped',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'sauteed',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'roasted',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'simpering',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'petulant',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'unassuming',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'pulverized',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'tepid',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'sunny',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('adjectives')->insert([
            'name' => 'adorable',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
