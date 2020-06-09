<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnRoleImageBrithdayPhoneAddressToTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role')->nullable()->after('password');
            $table->string('image')->nullable()->after('role');
            $table->integer('phone')->nullable()->after('image');
            $table->date('birthday')->nullable()->after('phone');
            $table->string('address')->nullable()->after('birthday');
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
            //
        });
    }
}
