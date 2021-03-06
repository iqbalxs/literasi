<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class MainPost extends Model
{
		use HasSlug;
		
		protected $fillable = ['title', 'content', 'category','user_id','viewcount','status'];
		
    
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
}
