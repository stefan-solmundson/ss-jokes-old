<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJokesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jokes', function (Blueprint $table) {
            // https://laravel.com/docs/7.x/migrations#columns
            $table->id();
            $table->text('the_joke');
            $table->string('author', 128)->default('Unknown');
            $table->string('tags')->nullable();
            $table->string('rating', 2)->default('G');  // Ratings: E, G, PG, M, MA, R
            $table->bigInteger('user_id')->default(0)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jokes');
    }
}
