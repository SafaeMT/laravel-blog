<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                // To ensure referential integrity
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->timestamp('post_date')->useCurrent();
            $table->text('post_content');
            $table->text('post_title');
            $table->string('post_status', 20)->nullable();
            $table->string('post_name', 200);
            $table->string('post_type', 20)->nullable();
            $table->text('post_category');
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
        Schema::dropIfExists('posts');
    }
}
