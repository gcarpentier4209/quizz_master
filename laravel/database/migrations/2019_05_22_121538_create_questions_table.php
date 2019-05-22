<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->unsigned()->nullable();
            $table->foreign('topic_id', 'fk_256_topic_topic_id_question')->references('id')->on('topics');
            $table->text('question_text')->nullable();
           // $table->text('code_snippet')->nullable();
            $table->text('good_response');
            $table->text('bad_response1');
            $table->text('bad_response2');
            $table->text('bad_response3');
            $table->text('clue');
            $table->string('difficulty');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
