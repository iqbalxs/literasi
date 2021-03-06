<?php

namespace App;

use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class StudentPost extends Model
{
		use HasSlug;
		use Rateable;
		
		protected $fillable = ['title', 'content','user_id','viewcount','status'];
		
		/**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
			return SlugOptions::create()
					->generateSlugsFrom('title')
					->saveSlugsTo('slug');
    }

    public function user()
		{
			return $this->belongsTo('App\User');
		}

		public function scopeGetRatedPost($query, $value){
			return $query->orderBy('average_rate', 'desc')->limit($value);
		}
}
