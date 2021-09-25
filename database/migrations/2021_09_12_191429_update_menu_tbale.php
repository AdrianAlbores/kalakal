<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMenuTbale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('menus', 'role_access')) {
            Schema::table('menus', function (Blueprint $table) {
                $table->string('role_access')->nullable();
            });
        }
        if (!Schema::hasColumn('sub_menus', 'role_access')) {
            Schema::table('sub_menus', function (Blueprint $table) {
                $table->string('role_access')->nullable();
            });
        }
        if (!Schema::hasColumn('menus', 'add_on_name')) {
            Schema::table('menus', function (Blueprint $table) {
                $table->dropColumn('add_on_name')->nullable();
            });
        }
        if (!Schema::hasColumn('sub_menus', 'add_on_name')) {
            Schema::table('sub_menus', function (Blueprint $table) {
                $table->dropColumn('add_on_name')->nullable();
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
    }
}
