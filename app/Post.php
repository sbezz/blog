<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
        //return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'posts_tags');
        //return $this->belongsToMany(Tag::class);
    }

    public function getTagListAtrribute($tags)
    {
       // $tags->lists('name');
        //$tags = $this->tags()->all();
        $this->tags()->lists('name')->all();

        return implode(', ', $tags);
        //return implode($tags, ', ');
    }
}
