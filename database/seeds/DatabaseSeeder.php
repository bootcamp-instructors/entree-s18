<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MainsTableSeeder::class);
        $this->call(SidesTableSeeder::class);
        $this->call(AdjectivesTableSeeder::class);
    }
}
