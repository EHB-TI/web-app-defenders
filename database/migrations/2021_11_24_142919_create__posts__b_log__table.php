<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsBLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('posts', function (Blueprint $table){

                $table->increments('id');
                $table->string('slug');
                $table->string('title');
                $table->longText('description');
                $table->string('image_path');
                $table->timestamps();
                $table->unsignedBigInteger('user_id')->nullable();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            });
        
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
        Schema::table('posts', function (Blueprint $table)
        {
            $table->dropForeign('posts_user_id_foreign');
            $table->dropColumn(['user_id']);
        });
    }
}