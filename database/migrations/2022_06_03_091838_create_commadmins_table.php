<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommadminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commadmins', function (Blueprint $table) {
            $table->id();
            $table->String('nom_user');
            $table->String('nom_prduit');
            $table->String('image_produit');
            $table->String('prix_total');
            $table->String('nom_soc')->default('');
            $table->integer('counKey')->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commadmins');
    }
}
