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
                'the_joke' => "*What do you call a donkey with only three legs?*  \n\n".
                    "A Wonkey.",
                'author' => 'Unknown', 'tags' => 'dad #donkey', 'rating' => 'G',
                'user_id' => 1,
            ],
            [
                'the_joke' => "*Did you hear about the Italian chef who died?*  \n\n".
                    "He pasta way.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => 1,
            ],
            [
                'the_joke' => "*What do you call a doll with chops on her head?*  \n\n".
                    "Barbie.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => 1,
            ],
            [
                'the_joke' => "*What do you do when you get cold?*  \n\n".
                    "Go stand in the corner, it is usually around 90 degrees.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => 1,
            ],
            [
                'the_joke' => "*Have you heard the rumour going around about butter?  \n\n".
                    "Never mind | I shouldn’t spread it!*",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => 1,
            ],
            [
                'the_joke' => "*What do you call a doll with chops on her head?*  \n\n".
                    "Barbie.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => 1,
            ],
            [
                'the_joke' => "*How much does a hipster dad weigh?*  \n\n".
                    "An Instagram.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => 1,
            ],
            [
                'the_joke' => "*Why did the toilet paper roll down the hill?*  \n\n".
                    "To get to the bottom.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => 1,
            ],
            [
                'the_joke' => "*Have you tried the new restaurant on the moon?*  \n\n".
                    "The food is great but there’s no atmosphere.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "*Did you hear about the guy who invented Lifesavers?*  \n\n".
                    "They say he made a mint.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "*I used to be a banker.*  \n\n".
                    "Then I lost interest.",
                'author' => 'Unknown', 'tags' => 'dad #food', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "*What do you call a man with a shovel?*  \n\n".
                    "Doug.",
                'author' => 'Unknown', 'tags' => 'dad #names', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "*What do you call a man with a plank on his head?*  \n\n".
                    "Edward.",
                'author' => 'Unknown', 'tags' => 'dad #names', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "*What do you call a man with three planks on his head?*  \n\n".
                    "Edward Woodward.",
                'author' => 'Unknown', 'tags' => 'dad #names #celebrity', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "*What do you call a man who lives under a pile of leaves?*  \n\n".
                    "Russel.",
                'author' => 'Unknown', 'tags' => 'dad #names #celebrity', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "*What do you call a lady with a bird sat on her shoulder?*  \n\n".
                    "Robyn.",
                'author' => 'Unknown', 'tags' => 'dad #names', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Evening news is where they begin with ‘Good evening’, and then proceed to tell you why it isn’t.",
                'author' => 'Unknown', 'tags' => 'oneliner ', 'rating' => 'PG',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "How do you keep an idiot in suspense?", 'author' => 'Unknown',
                'tags' => 'dad #oneliner ', 'rating' => 'G', 'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Two whales walk into a bar.  \n\n".
                    "The first one says, “Weeeeeooooouuuhhhh”.  \n\n".
                    "The next whale says, “Shut up, Steve. You’re drunk.”",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'PG',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I hate Russian dolls…  \n\n".
                    "they're so full of themselves",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What’s E.T. short for?  \n\n".
                    "Because he’s only got little legs.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "“I stand corrected,” said the man in the orthopedic shoes.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I’m addicted to brake fluid | but I can stop whenever I want.",
                'author' => 'Unknown', 'tags' => 'oneliner #dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Always borrow money from a pessimist.  \n\n".
                    "He won’t expect it back.",
                'author' => 'Unknown', 'tags' => 'money #adults', 'rating' => 'PG',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Money can’t buy happiness, but it sure makes misery easier to live with.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I didn’t say it was your fault.  \n\n".
                    "I said I was blaming you.",
                'author' => 'Unknown', 'tags' => 'oneliner ', 'rating' => 'MA',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "We have enough gun control.  \n\n".
                    "What we need is idiot control.",
                'author' => 'Unknown', 'tags' => 'guns #politics ', 'rating' => 'MA',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "War does not determine who is right.  \n\n".
                    "It determines who is left.",
                'author' => 'Unknown', 'tags' => 'dad #politics', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I used to be addicted to soap, but I’m clean now.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do computers eat when they get hungry?  \n\n".
                    "Chips.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],

            [
                'the_joke' => "Why doesn’t Elton John doesn’t eat iceberg lettuce?  \n\n".
                    "Because he’s a rocket man. ",
                'author' => " Clinton, Hamersley", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What do you call a blind dinosaur?  \n\n".
                    "A do-you-think-he-saurus!",
                'author' => " Brad | Darlington", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "How do you make a Kleenex dance?  \n\n".
                    "Put a little boogie in it",
                'author' => " Chris, Riverton", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "Last night I dreamt that I was a muffler.  \n\n".
                    "I woke up feeling exhausted.",
                'author' => " Jacinta, Ferndale", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "Why did the elephant drink?  \n\n".
                    "To forget!",
                'author' => "Kerry, Anketell", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "Why are pirates called pirates?  \n\n".
                    "Because they arrrrr!",
                'author' => "Audrey, Ludlow", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What did one snowman say to the other?  \n\n".
                    "Can you smell carrots?",
                'author' => "Dianna, Ballajura", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "At school, I was always excellent at spelling bees.  \n\n".
                    "It was all of the other words that I had trouble with.",
                'author' => "Jacinta, Rossmoyne", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What’s the advantage of living in Switzerland?  \n\n".
                    "Well, the flag is a big plus.",
                'author' => "Graham, Leeming", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "A polar bear enters a bar and says to the bartender,   \n\n".
                    "“I’ll have a rum......................................................................and coke”  \n\n".
                    "Bartender asks “Why the big pause?”  \n\n".
                    "The bear answers “I dunno, I’ve always had them”. ",
                'author' => " Emily, Casuarina", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "How do you know when a clown farts?  \n\n".
                    "Smells funny! ",
                'author' => " David | Greenwood", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What did one pencil say to the other pencil?  \n\n".
                    "You’re looking sharp! ",
                'author' => " Eric, Hamilton Hill", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "Did you hear about the cross-eyed teacher?  \n\n".
                    "He couldn’t control his pupils. ",
                'author' => " David", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "Why has an elephant got four feet?  \n\n".
                    "Because it would look silly with six inches ",
                'author' => " Andrew, Baldivis", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What did the male lamb say to the lady lamb?  \n\n".
                    "Nice rack! ",
                'author' => " Jeremy, Mandurah", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "Dad | is Broome in WA?  \n\n".
                    "Yes, and broom is also in the cupboard. ",
                'author' => " Adam, Perth", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What did the fish say when it ran into the brick wall?  \n\n".
                    "Dam! ",
                'author' => " Kelly, Carnarvon", 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What do you call someone with lots of dip and no crackers?  \n\n".
                    "Crackalacking ",
                'author' => " Anna, Geraldton",
                'tags' => 'dad ', 'rating' => 'G', 'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What do you call an Irishman who sits on the veranda all night?  \n\n".
                    "Paddy-o furniture! ",
                'author' => " Barry, Kwinana",
                'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "Did you catch the huge cheese factory explosion?  \n\n".
                    "There wasn’t much left but de brie. ",
                'author' => " Kim, Busselton",
                'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "How can you tell if there is a squirrel in your peanut butter?  \n\n".
                    "Check the ingredients label. ",
                'author' => " Diana, Bentley",
                'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ], [
                'the_joke' => "What do you call a doll with chops on her head?  \n\n".
                    "Barbie ",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do you do when you get cold?  \n\n".
                    "Go stand in the corner, it is usually around 90 degrees. ",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do you call a donkey with three legs?  \n\n".
                    "Wonkey ",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Have you heard the rumour going around about butter?  \n\n".
                    "Never mind | I shouldn’t spread it! ",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Have you tried the new restaurant on the moon?  \n\n".
                    "The food is great but there’s no atmosphere. ",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Why did the toilet paper roll down the hill ?  \n\n".
                    "To get to the bottom.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "How much does a hipster dad weigh ?  \n\n".
                    "An Instagram.  |",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Did you hear about the guy who invented Lifesavers ?  \n\n".
                    "They say he made a mint.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I used to be a banker. \n\n".
                    "Then I lost interest.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do you call a man with a shovel ?  \n\n".
                    "Doug  ",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "You can’t run through a camp site. \n\n".
                    "You can only ran, because it’s past tents.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I told my wife she drew her eyebrows too high. \n\n".
                    "She seemed surprised.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "The shovel was a groundbreaking invention.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "How do you find Will Smith in the snow ?  \n\n".
                    "You look for the fresh prints.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do you call an Alligator wearing a vest ?  \n\n".
                    "An investigator.",
                'author' => 'Unknown', 'tags' => 'dad | animal ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What’s Forrest Gump’s Facebook password ?  \n\n".
                    "1forest1 ",
                'author' => 'Unknown', 'tags' => 'dad | film, run ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "How do you drown a hipster ?  \n\n".
                    "In the mainstream. |",
                'author' => 'Unknown', 'tags' => 'dad | hipster ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do you call a deer with no eyes ?  \n\n".
                    "No - eye - deer ",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Why did the coffee file a police report ?  \n\n".
                    "It got mugged.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Can February March ?  \n\n".
                    "No, but April May can.",
                'author' => 'Unknown',
                'tags' => 'dad | calendar, month, march, february, april, may ',
                'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "do you want to hear a joke about paper ?  \n\n".
                    "Never mind | it’s tear - able ",
                'author' => 'Unknown', 'tags' => 'dad | paper ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Why is nobody friends with Dracula ?  \n\n".
                    "Because he is a pain in the neck!",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Dad | did you get a haircut ?  \n\n".
                    "No, I got them all cut. |",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Did you hear about the restaurant on the moon ?  \n\n".
                    "Great food | no atmosphere.",
                'author' => 'Unknown', 'tags' => 'dad | moon, space ', 'rating' => 'G',
                'user_id'
                => 1,
            ],
            [
                'the_joke' => "Did you hear about the guy who invented Lifesavers ?  \n\n".
                    "They say he made a mint.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I went to buy some camouflage pants the other day, couldn’t find any.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Did you hear about the guy who stole a calendar ?  \n\n".
                    "He got 12 months.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What did the ocean say to the shore ?  \n\n".
                    "Nothing, it just waved.",
                'author' => 'Unknown', 'tags' => 'dad | nature, sea ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "How do locomotives know where they are going ?  \n\n".
                    "Lots of training.",
                'author' => 'Unknown', 'tags' => 'dad | train, transport ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Why do crabs never give to charity ?  \n\n".
                    "Because they’re shellfish.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do you call a fish with no eyes ?  \n\n".
                    "A fshhh.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "How much does a hipster weigh ?  \n\n".
                    "An Instagram.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "A sandwich walks into a bar. \n\n".
                    "The bartender says “sorry, we don’t serve food here”.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What are the advantages of living in Switzerland ?  \n\n".
                    "Well, the flag is a big plus.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Did you hear there’s a new type of broom out ?  \n\n".
                    "It’s sweeping the nation.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I used to be addicted to the hokey pokey. \n\n".
                    "But I turned myself around.",
                'author' => 'Unknown', 'tags' => 'dad ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do you call a cow with no legs ?  \n\n".
                    "Ground beef.",
                'author' => 'Unknown', 'tags' => 'dad | animal ', 'rating' => 'G', 'user_id'
            => 1,
            ],
            [
                'the_joke' => "What do you call Jay Z when he’s sleeping ?  \n\n".
                    "Jay Zzzzz.",
                'author' => 'Unknown', 'tags' => 'dad | sleep ', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "Why do scuba divers fall backwards into the water ?  \n\n".
                    "If they fell forwards they’d still be in the boat.",
                'author' => 'Unknown', 'tags' => 'dad | scuba', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I’d tell you a joke about construction but I’m still working on it.",
                'author' => 'Unknown', 'tags' => 'dad | building, construction ',
                'rating' => 'G', 'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "What do you call cheese that isn’t yours ?  \n\n".
                    "Nacho cheese.",
                'author' => 'Unknown', 'tags' => 'dad,food', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
            [
                'the_joke' => "I thought about going on an all - almond diet. \n\n".
                    "But that’s just nuts.",
                'author' => 'Unknown', 'tags' => 'dad | food', 'rating' => 'G',
                'user_id' => rand(2, 8),
            ],
        ];

        foreach ($newJokes as $joke) {
            $joke['the_joke'] = str_replace(
                [" \n", "\n", " /n", " \r"], " \r\r",
                trim($joke['the_joke'])
            );
            Joke::create($joke);
        }
    }
}
