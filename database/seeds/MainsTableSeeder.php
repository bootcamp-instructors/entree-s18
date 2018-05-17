<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mains')->insert([
            'name' => 'chicken leg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('mains')->insert([
            'name' => 'salmon fillet',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('mains')->insert([
            'name' => 'turkey breast',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('mains')->insert([
            'name' => 'beef patty',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('mains')->insert([
            'name' => 'pork cutlet',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('mains')->insert([
            'name' => 'scallops',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('mains')->insert([
            'name' => 'shrimp',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('mains')->insert([
            'name' => 'chicken breast',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
