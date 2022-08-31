<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentairs', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id')->default(NULL);
            $table->Integer('post_id')->default(NULL);
            $table->string('body')->default('');
            $table->string('user_image')->default('');
            $table->string('user_name')->default('');
            
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
        Schema::dropIfExists('commentairs');
    }
}
