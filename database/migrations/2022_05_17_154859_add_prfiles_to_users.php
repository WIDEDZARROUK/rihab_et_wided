<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPrfilesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('imagevendeur')->after('email')->nullable()->default('imgDefault.jpg');
            $table->string('nomsociete')->nullable();
            $table->string('prenom')->after('name')->nullable();
            $table->Integer('numerosiret')->nullable();
            $table->Integer('numerocart')->nullable();
            $table->string('phone')->nullable();
            $table->longText('description')->nullable();

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
