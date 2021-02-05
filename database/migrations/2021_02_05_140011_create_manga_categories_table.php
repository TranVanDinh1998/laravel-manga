<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangaCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manga_id')->nullable()->unsigned();
            $table->integer('category_id')->nullable()->unsigned();
            // $table->timestamps();
            $table->boolean('active')->default(1);
            $table->softDeletes();

            if (Schema::hasTable('mangas')) {
                $table->foreign('manga_id')->references('id')->on('mangas');
            }
            if (Schema::hasTable('categories')) {
                $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('manga_categories_manga_id_foreign');
        Schema::dropIfExists('manga_categories_category_id_foreign');
        Schema::dropIfExists('manga_categories');
    }
}
