<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeildTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('referal')->nullable()->after('email');
            $table->string('status')->default('active')->after('email');
            $table->string('ip')->nullable()->after('email');
            $table->string('image')->nullable()->after('email');
            $table->string('tell')->nullable()->after('email');
            $table->string('address')->nullable()->after('email');
            $table->string('username')->after('name');
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

            $table->dropColumn('status');
            $table->dropColumn('ip');
            $table->dropColumn('tell');
            $table->dropColumn('image');
            $table->dropColumn('address');
            $table->dropColumn('referal');
            $table->dropColumn('username');
        });
    }
}
