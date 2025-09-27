<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;
    protected $fillable = [
    'name',
    'email',
    'phone',
    'address',
    'image',
    'major_id'
    ];


    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }


    public function imgUrl()
    {
        $image = $this->image;

        if (!file_exists(public_path($image)) || $image == null) {
            # code...
            return asset("front/assets/images/major.jpg");
        }
        return asset("front/assets/images/doctors/" .$image);
    }


}
