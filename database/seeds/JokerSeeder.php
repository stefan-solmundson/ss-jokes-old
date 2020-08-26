<?php

use Illuminate\Database\Seeder;

class JokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$newJokers =
    	[
    		'the_joke'=>"Joke 1",
    		'author'=>"Unknown",
    		'tags'=>"#dad #bad",
    		'rating'=>"G",
    		'user_id'=>1,
    	],
    	[
    		'the_joke'=>"Joke 2",
    		'author'=>"Unknown",
    		'tags'=>"#dad #mad",
    		'rating'=>"PG",
    		'user_id'=>1,
    	],
        //
    }
}
