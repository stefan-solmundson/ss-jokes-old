<?php

use Illuminate\Database\Seeder;
use App\Joke;

class JokeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newJokes = [
            [
                'the_joke'=>"Joke 1",
                'author'=>'Unknown',
                'tags'=>'#dad #bad',
                'rating'=>'G',
                'user_id'=>1,
            ],
            [
                'the_joke'=>"Joke 2",
                'author'=>'Unknown',
                'tags'=>'#dad #mad',
                'rating'=>'PG',
                'user_id'=>1,
            ],
        	[
        		'the_joke'=>'<p>What do you call a donkey with only three legs?</p><p>A Wonkey.</p>',
        		'author'=>'Unknown',
            	'tags'=>'#dad #donkey',
            	'rating'=>'G',
            	'user_id'=>1,
        	],

        	[
        		'the_joke'=>'<p>Did you hear about the Italian chef who died?</p><p>He pasta way.</p>',
        		'author'=>'Unknown',
            	'tags'=>'#dad #food',
            	'rating'=>'G',
            	'user_id'=>1,
        	],
        ];

        foreach($newJokes as $joke) {
        	Joke::create($joke);
        }
    }
}
