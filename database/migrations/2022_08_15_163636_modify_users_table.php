<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('id');
            $table->boolean('is_admin')->after('password');
            $table->boolean('is_active')->after('is_admin');
            $table->dropColumn('name');
            $table->string('first_name')->after('username');
            $table->string('last_name')->after('first_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'username',
                'is_admin', 
                'is_active',
            ]);

            $table->string('name');
            $table->dropColumn([
                'first_name',
                'last_name',
            ]);
        });
    }
};
