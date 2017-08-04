<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherPost extends Model
{
    protected $fillable = ['title', 'content','category','user_id','viewcount','status'];

    public function user()
	{
		return $this->belongsTo('App\User');
	}
}
