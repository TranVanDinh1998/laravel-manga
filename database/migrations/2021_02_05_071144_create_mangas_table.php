<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            // create table
            $table->increments('id');
            $table->string('name');
            $table->string('alter_name')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('author')->nullable();
            $table->integer('like')->default(0);
            $table->integer('follow')->default(0);
            $table->integer('view')->default(0);
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->boolean('active')->default(1);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
