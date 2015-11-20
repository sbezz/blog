<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{

    /**
     * Usando o tinker
     *
     *  C:\xampp\htdocs\blog [master +2 ~2 -0 !]> php artisan tinker
     *  Psy Shell v0.6.1 (PHP 5.6.12 ÔÇö cli) by Justin Hileman
     *    >>> $post = new App\Post;
     *    => App\Post {#668}
     *    >>> $post->title = "Primeiro Postagem";
     *    => "Primeiro Postagem"
     *    >>> $post->content = "Conteudo da primeira Postagem.";
     *    => "Conteudo da primeira Postagem."
     *    >>> $post
     *    => App\Post {#668
     *    title: "Primeiro Postagem",
     *     content: "Conteudo da primeira Postagem.",
     *    }
     *    >>> $post->save();
     *    => true
     *
     */


    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('posts');
    }

}
