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
            $table->id();
            $table->text('the_joke');
            $table->string('author', 128)->default('Unknown');
            $table->string('tags')->nullable();
            $table->string('rating', 2)->default('G');  // Ratings: E, G, PG, M, MA, R
            $table->bigInteger('user_id')->unsigned()->default('0');
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
