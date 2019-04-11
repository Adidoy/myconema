<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classname')->required();
            $table->string('description')->nullable();
            $table->integer('phylum')->unsigned()->nullable();
            $table->integer('addedby')->unsigned()->nullable();
            $table->foreign('phylum')
                ->references('id')
                ->on('phylum')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('addedby')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('class');
    }
}
