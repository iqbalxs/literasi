<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentPost extends Model
{
    protected $fillable = ['title', 'content','user_id','viewcount','status'];

    public function user()
	{
		return $this->belongsTo('App\User');
	}
}
