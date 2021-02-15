<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableMangaAddDislikeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('mangas')){
            Schema::table('mangas', function(Blueprint $table) {
                $table->integer('dislike')->default(0)->after('like');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        if (Schema::hasColumn('mangas','dislike')){
            Schema::table('mangas', function(Blueprint $table) {
                $table->dropColumn('dislike');
            });
        }
    }
}
