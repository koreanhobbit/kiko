<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Plank\Mediable\Mediable;

class LogoBrand extends Model
{
	protected $guarded = [];

    use HasSlug;
    use Mediable;
    
    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public static function addNewLogoBrand($request)
    {
    	return static::create([
    		'name' => $request->name,
    	]);
    }
}
