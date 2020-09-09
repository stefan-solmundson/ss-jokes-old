<?php

use Illuminate\Database\Seeder;
use App\Vote;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $votes = [
        	[ 'user_id'=> 1,'vote'=> 1, 'joke_id'=> 1],
        	[ 'user_id'=> 3,'vote'=>-1, 'joke_id'=> 1],
        	[ 'user_id'=> 1,'vote'=> 1, 'joke_id'=> 2],
        	[ 'user_id'=> 3,'vote'=> 1, 'joke_id'=> 2],
        	[ 'user_id'=> 2,'vote'=>-1, 'joke_id'=> 1],
        ];

        foreach($votes as $vote) {
        	Vote::create($vote);
        }
    }
}
