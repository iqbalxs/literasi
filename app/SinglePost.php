<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinglePost extends Model
{
    protected $fillable = ['title', 'content','category','user_id'];

    public function user()
	{
		return $this->belongsTo('App\User');
	}
}
