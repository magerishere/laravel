<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['url','imageable_id','imageable_type'];
    public function imageable()
    {
        return $this->morphTo();
    }

    public function setImageableTypeAttribute($type)
    {
        $this->attributes['imageable_type'] = "App\Models\\" . $type;
    }

    public function getUrlAttribute($url)
    {
        return '/storage/images/' . $url;
    }

}
