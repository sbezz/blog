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

    public function getTagListAttribute($tags)
    {

       $tags = $this->tags()->lists('name')->all();

        return implode(', ', $tags);
    }

    //or more correct
    /*
    public function getTagListAttribute()
    {
        if($this->tags()->get()->toArray() != []){
            foreach ($this->tags()->get()->toArray() as $key => $value) {
                $array[$key] = $value['name'];
            }
            $tags = implode(',',$array);
        }else{
            $tags = '';
        }
        return $tags;
    }*/
}
