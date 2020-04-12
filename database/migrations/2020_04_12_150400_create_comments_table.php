<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('comment_id');
            $table->string('user_id');
            $table->string('post_id');
            $table->text('body');
            $table->timestamps();
        });
    }

    public function store($inputs, $user_id)
    {
        $comment = new $this->model; 
     
        $comment->content = $inputs['comments'];
        $comment->post_id = $inputs['post_id'];
        $comment->user_id = $user_id;
     
        $comment->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
