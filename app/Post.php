<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// protected $table = 'posts';
	// public $timestamps = false;
    
    protected $fillable = [ 'title', 'description', 'status', 'user_id' ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function tags()
    {
    	return $this->belongsToMany(Tag::class, 'post_tag');
    }

}
