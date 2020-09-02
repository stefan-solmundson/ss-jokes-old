<?php

use Illuminate\Database\Seeder;
use App\Rating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratings = [
        	[
        		'code'=>'G',
        		'description'=>htmlspecialchars('General/Unclassified.'),
        		'min_age'=>0,
        	],
        	[
        		'code'=>'PG',
        		'description'=>htmlspecialchars('Parental Guidance required.'),
        		'min_age'=>13,
        	],
        	[
        		'code'=>'MA',
        		'description'=>htmlspecialchars('Mature Content. may contain mildly offensive content.'),
        		'min_age'=>18,
        	],
        	[
        		'code'=>'R',
        		'description'=>htmlspecialchars('Restricted Content. Will offend some people'),
        		'min_age'=>25,
        	],
        	        	[
        		'code'=>'B',
        		'description'=>htmlspecialchars('Banned content.'),
        		'min_age'=>9999,
        	],
        ];

        foreach($ratings as $rating) {
        	Rating::create($rating);
        }
    }
}
