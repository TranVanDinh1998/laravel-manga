<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDescriptionColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasColumn('mangas','description')) {
            Schema::table('mangas', function (Blueprint $table) {
                $table->text('description')->nullable()->change();
            });
        }
        if (Schema::hasColumn('categories','description')) {
            Schema::table('categories', function (Blueprint $table) {
                $table->text('description')->nullable()->change();
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
        if (Schema::hasColumn('mangas','description')) {
            Schema::table('mangas', function (Blueprint $table) {
                $table->string('description')->nullable()->change();
            });
        }
        if (Schema::hasColumn('categories','description')) {
            Schema::table('categories', function (Blueprint $table) {
                $table->string('description')->nullable()->change();
            });
        }
    }
}
