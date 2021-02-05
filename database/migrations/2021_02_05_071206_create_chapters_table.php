<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('manga_id')->nullable()->unsigned();
            $table->integer('view')->default(0);
            $table->timestamps();
            $table->boolean('active')->default(1);
            $table->softDeletes();

            if (Schema::hasTable('mangas')) {
                $table->foreign('manga_id')->references('id')->on('mangas');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapters_manga_id_foreign');
        Schema::dropIfExists('chapters');
    }
}
