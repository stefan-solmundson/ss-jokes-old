<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
        	[ 'tag'=>'dad',  	],
        	[ 'tag'=>'food',  	],
        	[ 'tag'=>'school',	],
        	[ 'tag'=>'love',  	],
        	[ 'tag'=>'animal',	],
        	[ 'tag'=>'work',  	],
        	[ 'tag'=>'geek',  	],
        ];

        foreach($tags as $tag) {
        	Tag::create($tag);
        }
    }
}
