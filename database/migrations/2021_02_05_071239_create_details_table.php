<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter_id')->nullable()->unsigned();
            $table->string('image')->nullable();
            $table->integer('position')->default(0);
            $table->boolean('active')->default(1);
            $table->softDeletes();
            // $table->timestamps();

            if (Schema::hasTable('chapters')) {
                $table->foreign('chapter_id')->references('id')->on('chapters');
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
        Schema::dropIfExists('details_chapter_id_foreign');
        Schema::dropIfExists('details');
    }
}
