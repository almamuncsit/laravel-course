<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDesignationToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('designation')->nullable()->after('email');
            $table->integer('family_members')->nullable()->change();
            $table->string('email', 70)->change();
            $table->renameColumn('name', 'username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('designation');
            $table->integer('family_members')->change();
            $table->string('email', 100)->change();
            $table->renameColumn('username', 'name');
        });
    }
}
