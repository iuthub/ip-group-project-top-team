<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_tags', function (Blueprint $table) {
            $table->integer('good_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('good_id')->references('id')->on('goods')
                ->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('good_tags');
    }
}
