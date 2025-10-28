<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Major extends Model
{
    /** @use HasFactory<\Database\Factories\MajorFactory> */
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'name'

    ];



    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function imgUrl()
    {
        $image = $this->image;

        if (!file_exists(public_path('front/assets/images/majors/' .$image)) || $image == null) {
            # code...
            return asset("front/assets/images/major.jpg");
        }
        return asset('front/assets/images/majors/' .$image);
    }

}
