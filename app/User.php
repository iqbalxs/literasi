<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','r_id','school', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relasi
    public function main_post()
    {
        return $this->hasMany('App\MainPost');
    }

    public function teacher_post()
    {
        return $this->hasMany('App\TeacherPost');
    }

    public function student_post()
    {
        return $this->hasMany('App\StudentPost');
    }
    
    public function single_post()
    {
        return $this->hasMany('App\SinglePost');
    }
}
