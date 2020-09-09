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
        // The Eloquent database seed files must be MANUALLY added
        $this->call(UserSeeder::class);
        $this->call(JokeSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(VoteSeeder::class);
        $this->call(RatingSeeder::class);
        $this->call(StopWordSeeder::class);
    }
}
