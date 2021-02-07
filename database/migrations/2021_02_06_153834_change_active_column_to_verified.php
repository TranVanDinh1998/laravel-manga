<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeActiveColumnToVerified extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('mangas','active')) {
            Schema::table('mangas', function (Blueprint $table) {
                $table->renameColumn('active','verified');
            });
        }
        if (Schema::hasColumn('categories','active')) {
            Schema::table('categories', function (Blueprint $table) {
                $table->renameColumn('active','verified');
            });
        }
        if (Schema::hasColumn('chapters','active')) {
            Schema::table('chapters', function (Blueprint $table) {
                $table->renameColumn('active','verified');
            });
        }
        if (Schema::hasColumn('details','active')) {
            Schema::table('details', function (Blueprint $table) {
                $table->renameColumn('active','verified');
            });
        }
        if (Schema::hasColumn('manga_categories','active')) {
            Schema::table('manga_categories', function (Blueprint $table) {
                $table->renameColumn('active','verified');
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
        if (Schema::hasColumn('mangas','verified')) {
            Schema::table('mangas', function (Blueprint $table) {
                $table->renameColumn('verified','active');
            });
        }
        if (Schema::hasColumn('categories','verified')) {
            Schema::table('categories', function (Blueprint $table) {
                $table->renameColumn('verified','active');
            });
        }
        if (Schema::hasColumn('chapters','verified')) {
            Schema::table('chapters', function (Blueprint $table) {
                $table->renameColumn('verified','active');
            });
        }
        if (Schema::hasColumn('details','verified')) {
            Schema::table('details', function (Blueprint $table) {
                $table->renameColumn('verified','active');
            });
        }
        if (Schema::hasColumn('manga_categories','verified')) {
            Schema::table('manga_categories', function (Blueprint $table) {
                $table->renameColumn('verified','active');
            });
        }
    }
}
